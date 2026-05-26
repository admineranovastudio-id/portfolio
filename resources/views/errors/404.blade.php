@extends('layouts.app')

@section('title', '404 — Halaman Tidak Ditemukan')

@section('content')
<section class="error-page">
    <div class="container error-container">
        <h1 class="error-code text-gradient">404</h1>
        <p class="error-message">Halaman yang Anda cari tidak ditemukan.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">
            <span>Kembali ke Beranda</span>
        </a>
    </div>
</section>
@endsection
