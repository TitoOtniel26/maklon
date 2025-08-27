<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
     public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.article', compact('articles'));
    }

    public function create()
    {
        return view('admin.article_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|max:255',
            'slug'        => 'required|unique:articles',
            'content'     => 'required',
            'meta_title'  => 'nullable|max:255',
            'meta_desc'   => 'nullable|max:255',
            'meta_key'    => 'nullable|max:255',
        ]);

        Article::create($request->all());
        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.artikel.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title'       => 'required|max:255',
            'slug'        => 'required|unique:articles,slug,'.$article->id,
            'content'     => 'required',
            'meta_title'  => 'nullable|max:255',
            'meta_desc'   => 'nullable|max:255',
            'meta_key'    => 'nullable|max:255',
        ]);

        $article->update($request->all());
        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dihapus!');
    }
}
