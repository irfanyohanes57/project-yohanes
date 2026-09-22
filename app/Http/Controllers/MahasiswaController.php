<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Yohanes V. Suardy',
            'nim' => '251011700547',
            'email' => 'irfansuardy688@gmail.com',
            'prodi' => 'Sistem Informasi',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}