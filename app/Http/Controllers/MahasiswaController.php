<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa =
            [
                'nim' => '251011701105',
                'nama' => 'Daffa Fachri',
                'jurusan' => 'Sistem Informasi',
                'kelas' => '03SIFE001',
                'email' => 'daffa@newtonindonesia.co.id',
                'kampus' => 'Universitas Pamulang',
                'status' => 'Aktif'
            ];
        return view('page.profile', compact('mahasiswa'));
    }
}
