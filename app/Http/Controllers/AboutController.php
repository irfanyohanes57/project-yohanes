<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Ifolala Halawa',
            'status' => 'Mahasiswa Aktif',
            'nim' => '251011700436',
            'email' => 'alanhalawa0909@gmail.com',
            'prodi' => 'Sistem Informasi',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}