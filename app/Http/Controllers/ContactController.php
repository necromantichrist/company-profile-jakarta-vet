<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint; // PENTING: Import model Complaint di sini

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submitPengaduan(Request $request)
    {
        // 1. Validasi Input Form
        $validated = $request->validate([
            'name'    => 'required|string|min:3|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|min:9|max:15',
            'branch'  => 'required|string',
            'message' => 'required|string|min:10',
        ]);

        // 2. Simpan Data ke Database menggunakan Model Eloquent
        Complaint::create($validated);

        // 3. Kembalikan user ke halaman sebelumnya dengan alert sukses
        return redirect()->back()->with('success', 'Terima kasih! Pengaduan Anda berhasil disimpan ke database.');
    }
}