<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::oldest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories['categories'] = Category::all();
        return view('admin.articles.create',$categories);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles,slug',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string|max:255',
            'meta_key' => 'nullable|string|max:255',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'meta_key' => $request->meta_key,
            'category_id' => (int)$request->category_id,
            'user_id' => 1,
            'schema' => $request->schema
        ]);

        return redirect()->route('article.index')->with('success', 'Article created successfully.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::select('id', 'name')
            ->orderBy('name')
            ->get();

        return view('admin.articles.edit', compact('article', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles,slug,' . $id,
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string|max:255',
            'meta_key' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $article->update([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'meta_key' => $request->meta_key,
        ]);

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article deleted successfully.');
    }

    public function generateAIContent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ai_title' => 'required|string|max:255',
            'ai_keyword' => 'required|string|max:255',
            'ai_style' => 'required|in:informative,casual,formal,persuasive',
            'ai_extra' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        $apiKey = env('GEMINI_API_KEY', 'AIzaSyA6MxRaJDgq1C0nAHx4dQAVioXFCZNA1BQ');
        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent';

        $prompt = "Generate an SEO-friendly article with the following details in JSON format only:\n" .
                  "{
                      \"title\": \"A creative article title in Indonesian\",
                      \"slug\": \"A URL-friendly slug based on the title\",
                      \"content\": \"The full article in HTML format with proper headings, paragraphs, and subheadings\",
                      \"meta_title\": \"A concise meta title (max 60 characters)\",
                      \"meta_description\": \"A meta description (max 160 characters)\",
                      \"meta_keywords\": \"Comma-separated keywords\",
                      \"category\": \"A relevant category name in Indonesian (e.g., Teknologi, Kesehatan, Wisata)\",
                      \"schema\": {
                          \"@context\": \"https://schema.org\",
                          \"@type\": \"Article\",
                          \"headline\": \"The article title\",
                          \"description\": \"A brief description of the article\",
                          \"keywords\": \"Comma-separated keywords\",
                          \"datePublished\": \"Current date in ISO format (e.g., 2025-08-28)\",
                          \"articleBody\": \"A plain-text summary of the article content (200-300 words)\",
                          \"publisher\": {
                              \"@type\": \"Organization\",
                              \"name\": \"Your Website Name\",
                              \"logo\": {
                                  \"@type\": \"ImageObject\",
                                  \"url\": \"https://yourwebsite.com/logo.png\"
                              }
                          }
                      }
                  }\n" .
                  "Details:\n" .
                  "Title: {$request->ai_title}\n" .
                  "Target Keywords: {$request->ai_keyword}\n" .
                  "Writing Style: {$request->ai_style}\n" .
                  "Additional Instructions: {$request->ai_extra}\n" .
                  "Ensure the output is engaging, in Indonesian, and wrapped in ```json```. The schema must be valid JSON-LD for Schema.org Article type.";

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-goog-api-key' => $apiKey,
            ])->post($url, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]);

            if ($response->successful()) {
                $content = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? '';
                if (!$content) {
                    return response()->json(['error' => 'Empty AI response'], 500);
                }

                // Clean the backticks and "json"
                $cleanedContent = preg_replace('/^```json\s*|\s*```$/', '', trim($content));
                $result = json_decode($cleanedContent, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    return response()->json(['error' => 'Failed to parse AI response: ' . json_last_error_msg()], 500);
                }

                if (!isset($result['title'], $result['slug'], $result['content'], $result['meta_title'], $result['meta_description'], $result['meta_keywords'], $result['category'], $result['schema'])) {
                    return response()->json(['error' => 'Invalid AI response format'], 500);
                }

                // Validate schema structure
                if (!isset($result['schema']['@context'], $result['schema']['@type'], $result['schema']['headline'], $result['schema']['description'])) {
                    return response()->json(['error' => 'Invalid schema structure in AI response'], 500);
                }

                // Handle category: find or create
                $categoryName = $result['category'];
                $category = Category::where('name', $categoryName)->first();
                if (!$category) {
                    $categorySlug = Str::slug($categoryName);
                    $count = Category::where('slug', 'like', $categorySlug . '%')->count();
                    if ($count > 0) {
                        $categorySlug .= '-' . $count;
                    }
                    $category = Category::create([
                        'name' => $categoryName,
                        'slug' => $categorySlug,
                    ]);
                }

                // Handle slug: ensure uniqueness
                $slug = $result['slug'];
                $count = \App\Models\Article::where('slug', 'like', $slug . '%')->count();
                if ($count > 0) {
                    $slug .= '-' . $count;
                }

                $result['slug'] = $slug;
                $result['category_id'] = $category->id;
                unset($result['category']); // Remove category name, use ID instead

                return response()->json($result);
            } else {
                return response()->json(['error' => 'Failed to generate content'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error connecting to AI service: ' . $e->getMessage()], 500);
        }
    }

    public function suggestAIContent(Request $request)
    {
        $apiKey = env('GEMINI_API_KEY');
        if (!$apiKey) {
            return response()->json(['error' => 'Missing API key'], 500);
        }

        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent';

        $prompt = "Suggest a random article idea for a blog. Provide the following in JSON format only: 
        {
            \"title\": \"A creative article title\",
            \"keyword\": \"Comma-separated keywords, e.g., keyword1, keyword2\",
            \"style\": \"One of: informative, casual, formal, persuasive\",
            \"extra\": \"Additional instructions, e.g., Keep it under 500 words, use bullet points\"
        }
        Make it original and engaging and in Indonesia language. Topics can be anything from tech, health, travel, etc. Please ensure the article idea is highly relevant to the current date, which is ".date('d-m-Y').", and the current situation or popular trends. Ensure the output is wrapped in ```json```";

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-goog-api-key' => $apiKey,
            ])->post($url, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]);

            if ($response->successful()) {
                $jsonResponse = $response->json();
                $content = $jsonResponse['candidates'][0]['content']['parts'][0]['text'] ?? '';

                if (!$content) {
                    return response()->json(['error' => 'Empty AI response'], 500);
                }

                // Bersihkan backticks dan "json"
                $cleanedContent = preg_replace('/^```json\s*|\s*```$/', '', trim($content));

                $suggestion = json_decode($cleanedContent, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    return response()->json(['error' => 'Failed to parse AI suggestion: ' . json_last_error_msg()], 500);
                }

                if (!isset($suggestion['title'], $suggestion['keyword'], $suggestion['style'], $suggestion['extra'])) {
                    return response()->json(['error' => 'Invalid AI suggestion format'], 500);
                }

                if (!in_array($suggestion['style'], ['informative', 'casual', 'formal', 'persuasive'])) {
                    return response()->json(['error' => 'Invalid style in AI suggestion'], 500);
                }

                return response()->json($suggestion);
            } else {
                return response()->json(['error' => 'Failed to suggest content'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error connecting to AI service: ' . $e->getMessage()], 500);
        }
    }

}
