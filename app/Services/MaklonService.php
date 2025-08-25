<?php

namespace App\Services;

class MaklonService
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('GEMINI_API_KEY'); // lebih aman ambil dari .env
    }

    public function enhanceSkillsWithGemini(string $skills): string
    {
        if (empty($this->apiKey)) {
            return "Error: API Key untuk Gemini tidak ditemukan di .env";
        }

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent";
        $prompt = "Berdasarkan keterampilan berikut: '$skills', berikan saran untuk memperbaiki deskripsi keterampilan agar lebih profesional untuk CV dalam bahasa Indonesia.";

        $data = [
            "contents" => [
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
            'X-goog-api-key: ' . $this->apiKey
        ];

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            return "Error cURL: " . $error;
        }

        if ($httpCode !== 200) {
            return "Gagal mendapatkan saran dari Gemini API: Kode HTTP $httpCode";
        }

        $result = json_decode($response, true);
        $text = $result['candidates'][0]['content']['parts'][0]['text'] ?? null;

        return $text ? trim(preg_replace('/\n+/', ' ', $text)) : "Tidak ada saran keterampilan dari Gemini API.";
    }
}
