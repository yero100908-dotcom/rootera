<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('pages.kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Pesan Anda telah berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }
}
