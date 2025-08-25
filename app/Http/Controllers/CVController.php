<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\MaklonService;

class CVController extends Controller
{
    protected $maklonService;

    public function __construct(MaklonService $maklonService)
    {
        $this->maklonService = $maklonService;
    }

    public function create()
    {
        return view('cv.create');
    }

    public function preview(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string',
        ]);

        $data['enhanced_skills'] = $this->maklonService->enhanceSkillsWithGemini($data['skills']);

        return view('cv.preview', compact('data'));
    }

    public function download(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string',
        ]);

        $data['enhanced_skills'] = $this->maklonService->enhanceSkillsWithGemini($data['skills']);

        $pdf = Pdf::loadView('cv.pdf', compact('data'));
        return $pdf->download('cv_' . str_replace(' ', '_', $data['name']) . '.pdf');
    }
}
