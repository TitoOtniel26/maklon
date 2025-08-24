<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Impor Pdf dengan benar

class CVController extends Controller
{
    /**
     * Menampilkan halaman formulir input CV.
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Menampilkan halaman preview CV dengan saran keterampilan dari Gemini API.
     */
    public function preview(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string',
        ]);

        // Panggil Gemini API untuk saran keterampilan
        $data['enhanced_skills'] = $this->enhanceSkillsWithGemini($data['skills']);

        return view('cv.preview', compact('data'));
    }

    /**
     * Mengunduh CV dalam format PDF dengan saran keterampilan dari Gemini API.
     */
    public function download(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string',
        ]);

        // Panggil Gemini API untuk saran keterampilan
        $data['enhanced_skills'] = $this->enhanceSkillsWithGemini($data['skills']);

        // Generate dan unduh PDF
        $pdf = Pdf::loadView('cv.pdf', compact('data'));
        return $pdf->download('cv_' . str_replace(' ', '_', $data['name']) . '.pdf');
    }

    /**
     * Memanggil Gemini API via cURL untuk menghasilkan saran keterampilan.
     */

  
    private function enhanceSkillsWithGemini($skills)
    {
        $apiKey = "AIzaSyA6MxRaJDgq1C0nAHx4dQAVioXFCZNA1BQ";
        if (empty($apiKey)) {
            return "Error: API Key untuk Gemini tidak ditemukan di .env";
        }

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent";
        $prompt = "Berdasarkan keterampilan berikut: '$skills', berikan saran untuk memperbaiki deskripsi keterampilan agar lebih profesional untuk CV dalam bahasa Indonesia.";

    
        $apiKey = "AIzaSyA6MxRaJDgq1C0nAHx4dQAVioXFCZNA1BQ";

        $data = [
                "contents" =>   [
                            [
                                "parts" => [
                                       ['text' => $prompt]
                                ]
                            ]
                        ]                   
                ];

        $ch = curl_init($url);
    
        $headers = [
            'Content-Type: application/json',
            'X-goog-api-key: ' . $apiKey
        ];
    
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            $result = "";
        } else {
            $result = json_decode($response, true);
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);

        curl_close($ch);
  
        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent';
        $prompt = "Berdasarkan keterampilan berikut: '$skills', berikan saran untuk memperbaiki deskripsi keterampilan agar lebih profesional untuk CV dalam bahasa Indonesia.";

        $data = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ]
        ];

     

        if ($response === false) {
            return "Error cURL: " . $error;
        }

        if ($httpCode !== 200) {
            return "Gagal mendapatkan saran dari Gemini API: Kode HTTP $httpCode";
        }

        $result = json_decode($response, true);
        // Ambil teks dari struktur JSON yang diberikan
        $text = $result['candidates'][0]['content']['parts'][0]['text'] ?? null;

        if (empty($text)) {
            return "Tidak ada saran keterampilan dari Gemini API.";
        }

        // Bersihkan teks dari karakter newline berlebih
        return trim(preg_replace('/\n+/', ' ', $text));
    }
}