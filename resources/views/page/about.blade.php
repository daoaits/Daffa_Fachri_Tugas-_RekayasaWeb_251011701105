@extends('layouts.app')

@section('title','About')

@section('content')
<div class="container flex-grow-1 py-4">
    <div class="col-md-12">
        <h2 class="fw-bold">Tentang Aplikasi</h2>
        <p class="text-muted">Aplikasi web ini dikembangkan sebagai pemenuhan tugas praktikum mata kuliah Rekayasa Web, Program Studi Sistem Informasi, Universitas Pamulang.</p>
        <div class="card p-3 border-0 bg-white shadow-sm mt-3" style="max-width: 500px;">
            <h6 class="fw-bold mb-2">Informasi Pengembang:</h6>
            <ul class="list-unstyled mb-0">
                <li><strong>Nama:</strong> Daffa Fachri</li>
                <li><strong>NIM:</strong> 251011701105</li>
                <li><strong>Kelas:</strong> 03SIFE001</li>
                <li><strong>Email:</strong> daffa@newtonindonesia.co.id</li>
            </ul>
        </div>
    </div>
</div>

@endsection