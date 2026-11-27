@extends('layouts.auth')

@section('title', 'Buat Akun - Jamu Kita')

@section('content')
<div class="container-fluid p-0">
    <div class="row g-0 jk-split-wrapper">
        {{-- Panel Kiri (Branding & Editorial) --}}
        <div class="col-lg-6 jk-split-left">
            <div>
                <a href="{{ route('login') }}" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                    <img
                        src="{{ asset('images/logo projek ppl .jpeg') }}"
                        alt="Logo Jamu Kita"
                        class="jk-brand-logo"
                        style="width: 40px; height: 40px; border-color: rgba(255, 255, 255, 0.25);"
                    >
                    <span class="jk-split-brand-text">
                        Jamu <span class="jk-split-brand-accent">Kita</span>
                    </span>
                </a>
            </div>

            <div class="my-4 my-lg-0">
                <h1 class="jk-split-hero-title mb-3">
                    Warisan Rempah,<br>
                    Hidup Lebih Sehat.
                </h1>
                <p class="jk-split-hero-desc mb-0">
                    Masuk atau buat akun baru untuk memesan racikan jamu segar, melacak pengiriman, dan menikmati manfaat herbal alami Nusantara.
                </p>
            </div>

            <div class="jk-split-left-footer">
                Akses khusus pelanggan &amp; anggota Jamu Kita.
            </div>
        </div>

        {{-- Panel Kanan (Form Buat Akun) --}}
        <div class="col-lg-6 jk-split-right">
            <div class="jk-register-container">
                <h2 class="font-serif fw-bold fs-2 mb-2" style="color: var(--jk-text);">
                    Buat Akun
                </h2>
                <p class="small mb-4" style="color: var(--jk-text-muted); line-height: 1.6;">
                    Lengkapi data Anda di bawah ini untuk membuat akun baru di Jamu Kita.
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger border-0 rounded-3 py-2 px-3 small mb-3" role="alert">
                        <i class="bi bi-exclamation-circle me-1"></i>
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register.store') }}" novalidate>
                    @csrf

                    {{-- Nama Lengkap --}}
                    <div class="mb-3">
                        <label for="name" class="form-label small fw-bold mb-1" style="color: var(--jk-text);">
                            Nama Lengkap
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control jk-register-input @error('name') is-invalid @enderror"
                            placeholder="contoh: Ratna Dewi"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >
                    </div>

                    {{-- Email atau Nomor WhatsApp --}}
                    <div class="mb-3">
                        <label for="email" class="form-label small fw-bold mb-1" style="color: var(--jk-text);">
                            Email atau Nomor WhatsApp
                        </label>
                        <input
                            type="text"
                            id="email"
                            name="email"
                            class="form-control jk-register-input @error('email') is-invalid @enderror"
                            placeholder="contoh: sari@jamukita.id atau 08123456789"
                            value="{{ old('email') }}"
                            required
                        >
                    </div>

                    {{-- Kata Sandi --}}
                    <div class="mb-3">
                        <label for="password" class="form-label small fw-bold mb-1" style="color: var(--jk-text);">
                            Kata Sandi
                        </label>
                        <div class="position-relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control jk-register-input pe-5 @error('password') is-invalid @enderror"
                                placeholder="Minimal 8 karakter"
                                required
                            >
                            <button
                                type="button"
                                class="jk-password-toggle-text"
                                id="toggleRegisterPassword"
                            >
                                Tampilkan
                            </button>
                        </div>
                    </div>

                    {{-- Konfirmasi Kata Sandi --}}
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label small fw-bold mb-1" style="color: var(--jk-text);">
                            Konfirmasi Kata Sandi
                        </label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control jk-register-input"
                            placeholder="Masukkan ulang kata sandi Anda"
                            required
                        >
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="btn jk-btn-primary jk-btn-submit w-100">
                        Daftar Akun Baru
                    </button>
                </form>

                {{-- Ketentuan & Tautan --}}
                <p class="mt-3 mb-3" style="font-size: 0.76rem; color: var(--jk-text-muted); line-height: 1.5;">
                    Dengan mendaftar, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi Jamu Kita.
                </p>

                <p class="small mb-3" style="color: var(--jk-text-muted);">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="jk-link-primary">Masuk di sini</a>
                </p>

                <a href="{{ route('home') }}" class="jk-link-primary small d-inline-flex align-items-center gap-1">
                    <span>&larr; Kembali ke beranda</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('toggleRegisterPassword');
        const passwordInput = document.getElementById('password');

        if (toggleButton && passwordInput) {
            toggleButton.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                toggleButton.textContent = isPassword ? 'Sembunyikan' : 'Tampilkan';
            });
        }
    });
</script>
@endpush
