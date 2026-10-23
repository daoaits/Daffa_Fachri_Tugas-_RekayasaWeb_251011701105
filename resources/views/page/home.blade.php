@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container flex-grow-1">
    <div class="col-md-12 py-4">
        <h2 class="fw-bold">Selamat Datang di Web Profile</h2>
        <p class="text-muted fs-5">Project Praktikum Rekayasa Web — <strong>Daffa Fachri</strong> (03SIFE001 / 251011701105)</p>
        <div class="mt-3">
            <a href="{{ url('/profile') }}" class="btn btn-primary me-2">Lihat Profile</a>
            <a href="{{ url('/project') }}" class="btn btn-outline-primary">Lihat Project</a>
        </div>
    </div>
</div>

@endsection