@extends('layouts.app')

@section('title', 'Jamu Kita - Apotek Herbal Tradisional & Portal Pelanggan')

@section('content')
{{-- Hero Section --}}
<section class="jk-hero-section">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 820px;">
            <div class="jk-hero-pill mb-4">
                <span style="color: var(--jk-primary);">
                    <i class="bi bi-flower1 me-1"></i> Warisan Rimpang Nusantara
                </span>
                <span class="text-muted">|</span>
                <span style="color: var(--jk-text-muted); letter-spacing: 0.06em;">APOTEK KERATON EST. 1928</span>
            </div>

            <h1 class="jk-hero-title mb-3">
                Memurnikan Tradisi Jamu untuk Keseimbangan Jiwa &amp; Raga
            </h1>

            <p class="jk-hero-lead mx-auto mb-4">
                Dari tanah subur lereng Gunung Merapi hingga racikan tangan terampil para empu jamu, kami mengeringkan bunga liar, menumbuk kunyit segar, dan memadukan madu hutan murni tanpa pemanis sintetis. Setiap tetes adalah penghormatan bagi kebugaran sejati Nusantara.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                <a href="#tentang-kami" class="btn jk-btn-primary jk-btn-pill-primary d-inline-flex align-items-center gap-2">
                    <span>Jelajahi Tentang Kami</span>
                    <i class="bi bi-arrow-down"></i>
                </a>
                <a href="#portal-login" class="btn jk-btn-pill-soft d-inline-flex align-items-center gap-2">
                    <span>Masuk Portal Pelanggan</span>
                    <i class="bi bi-lock"></i>
                </a>
            </div>
        </div>

        {{-- Hero Banner Image --}}
        <div class="mx-auto" style="max-width: 980px;">
            <div class="jk-hero-image-card">
                <img
                    src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?auto=format&fit=crop&w=1200&q=80"
                    alt="Seduhan Jamu Herbal Tradisional Jamu Kita"
                    onerror="this.style.display='none'"
                >
                <div class="jk-hero-image-overlay">
                    <span class="badge rounded-pill bg-white text-dark px-3 py-2 fw-semibold shadow-sm">
                        <span class="d-inline-block rounded-circle me-1" style="width: 8px; height: 8px; background-color: var(--jk-primary);"></span>
                        100% Organik &amp; Tanpa Pengawet
                    </span>
                    <span class="text-white small fw-semibold text-uppercase" style="letter-spacing: 0.08em; opacity: 0.9;">
                        Sedotan Pertama &bull; Panen Segar dari Lereng Merapi
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tentang Kami Section --}}
<section id="tentang-kami" class="py-5">
    <div class="container" style="max-width: 980px;">
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="jk-feature-card">
                    <div class="jk-feature-icon">
                        <i class="bi bi-sun"></i>
                    </div>
                    <h2 class="font-serif fw-bold fs-5 mb-2">Rempah Murni</h2>
                    <p class="small mb-0" style="color: var(--jk-text-muted); line-height: 1.65;">
                        Dipanen saat fajar untuk mempertahankan minyak atsiri aktif dan kesegaran rimpang alami.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jk-feature-card">
                    <div class="jk-feature-icon">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h2 class="font-serif fw-bold fs-5 mb-2">Seduhan Alami</h2>
                    <p class="small mb-0" style="color: var(--jk-text-muted); line-height: 1.65;">
                        Metode ekstraksi suhu terkontrol menjaga khasiat flavonoid tanpa merusak enzim baik.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="jk-feature-card">
                    <div class="jk-feature-icon">
                        <i class="bi bi-patch-check"></i>
                    </div>
                    <h2 class="font-serif fw-bold fs-5 mb-2">Resep Keraton</h2>
                    <p class="small mb-0" style="color: var(--jk-text-muted); line-height: 1.65;">
                        Formulasi turun-temurun sejak era Sri Sultan Hamengkubuwono VII dengan takaran seimbang.
                    </p>
                </div>
            </div>
        </div>

        {{-- Quote Banner --}}
        <div class="jk-quote-banner">
            <div class="d-flex gap-3 align-items-start">
                <span class="font-serif fs-1 lh-1" style="color: #d9a08d;">&ldquo;</span>
                <div>
                    <p class="font-serif fst-italic fs-5 mb-2" style="color: var(--jk-text);">
                        &ldquo;Jamu bukan sekadar penawar dahaga, ia adalah dialog hening antara tubuh dan semesta rempah pertiwi.&rdquo;
                    </p>
                    <p class="small fw-bold text-uppercase mb-0" style="color: var(--jk-primary); letter-spacing: 0.06em;">
                        &mdash; Mbok Darmi, Racik Tradisi Sejak 1964
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Racikan Unggulan Musim Ini --}}
<section class="py-4">
    <div class="container" style="max-width: 980px;">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-4">
            <div>
                <div class="small fw-bold text-uppercase mb-1" style="color: var(--jk-primary); letter-spacing: 0.08em;">
                    Pilihan Favorit Apotek
                </div>
                <h2 class="font-serif fw-bold fs-2 mb-1">Racikan Unggulan Musim Ini</h2>
                <p class="small mb-0" style="color: var(--jk-text-muted);">
                    Tersedia untuk pengiriman kilat dingin maupun paket seduh instan beraroma alami setiap pagi.
                </p>
            </div>
            <a href="#portal-login" class="jk-link-primary small text-nowrap">
                Pesan Racikan Favorit <i class="bi bi-chevron-right"></i>
            </a>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="jk-product-card">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="jk-tag-pill">Antioksidan &amp; Vitalitas</span>
                            <span class="font-serif fw-bold fs-5" style="color: var(--jk-primary);">Rp 28.000</span>
                        </div>
                        <h3 class="font-serif fw-bold fs-5 mb-2">Kunyit Asam Sriwedari</h3>
                        <p class="small mb-3" style="color: var(--jk-text-muted); line-height: 1.6;">
                            Kunyit biang segar berpadu dengan kematangan asam Jawa murni dan gula aren kelapa organik. Menyejukkan pencernaan.
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top" style="border-color: var(--jk-border) !important;">
                        <span class="small text-muted"><i class="bi bi-thermometer-half me-1"></i> Dingin / Hangat</span>
                        <a href="#portal-login" class="jk-btn-order-sm">+ Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="jk-product-card">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="jk-tag-pill">Stamina &amp; Sendi</span>
                            <span class="font-serif fw-bold fs-5" style="color: var(--jk-primary);">Rp 32.000</span>
                        </div>
                        <h3 class="font-serif fw-bold fs-5 mb-2">Beras Kencur Pandan Wangi</h3>
                        <p class="small mb-3" style="color: var(--jk-text-muted); line-height: 1.6;">
                            Kencur wangi sangrai, beras pandan wangi halus, rempah cengkeh aromatik, dan madu kaliandra pekat.
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top" style="border-color: var(--jk-border) !important;">
                        <span class="small text-muted"><i class="bi bi-lightning-charge me-1"></i> Pemulih Lelah</span>
                        <a href="#portal-login" class="jk-btn-order-sm">+ Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="jk-product-card">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="jk-tag-pill">Perlindungan Imun</span>
                            <span class="font-serif fw-bold fs-5" style="color: var(--jk-primary);">Rp 35.000</span>
                        </div>
                        <h3 class="font-serif fw-bold fs-5 mb-2">Temulawak Jahe Merah</h3>
                        <p class="small mb-3" style="color: var(--jk-text-muted); line-height: 1.6;">
                            Rimpang temulawak pilihan kaya kurkuminoid, diseduh dengan sengatan hangat jahe emprit dan serai wangi keraton.
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top" style="border-color: var(--jk-border) !important;">
                        <span class="small text-muted"><i class="bi bi-shield-plus me-1"></i> Detoks Hati</span>
                        <a href="#portal-login" class="jk-btn-order-sm">+ Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Portal Pelanggan / Login Section --}}
<section id="portal-login" class="jk-auth-section d-flex align-items-center justify-content-center">
    <div class="jk-login-card">
        {{-- Header Badge --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="jk-badge-portal">
                <i class="bi bi-lock-fill"></i>
                Portal Pelanggan
            </span>
            <span class="small text-muted fw-medium">Akses Jamu Personal</span>
        </div>

        {{-- Title & Subtitle --}}
        <h2 class="font-serif fw-bold fs-3 mb-2" style="color: var(--jk-text);">
            Selamat Datang Kembali
        </h2>
        <p class="small mb-4" style="color: var(--jk-text-muted); line-height: 1.6;">
            Masuk untuk mengelola langganan seduhan mingguan, memantau riwayat racikan, dan klaim hadiah herbal.
        </p>

        {{-- Google Login Button --}}
        <button type="button" class="btn jk-btn-google w-100 d-flex align-items-center justify-content-center gap-2">
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                <path fill="#4285F4" d="M23.49 12.27c0-.79-.07-1.54-.19-2.27H12v4.51h6.47c-.29 1.48-1.14 2.73-2.4 3.58v3h3.88c2.27-2.09 3.54-5.17 3.54-8.82z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.88-3c-.98.66-2.23 1.06-3.4 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            </svg>
            <span>Masuk dengan Google</span>
        </button>

        {{-- Divider --}}
        <div class="jk-divider">Atau dengan akun Jamu Kita</div>

        {{-- Session / Validation Alerts --}}
        @if ($errors->any())
            <div class="alert alert-danger border-0 rounded-3 py-2 px-3 small mb-3" role="alert">
                <i class="bi bi-exclamation-circle me-1"></i>
                {{ $errors->first() }}
            </div>
        @endif

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login.authenticate') }}" novalidate>
            @csrf

            {{-- Email / WhatsApp --}}
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <label for="email" class="form-label small fw-bold mb-0" style="color: var(--jk-text);">
                        Email atau Nomor WhatsApp
                    </label>
                    <span class="small fw-semibold" style="color: var(--jk-primary); font-size: 0.75rem;">Wajib</span>
                </div>
                <div class="input-group jk-input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="contoh: sari@jamukita.id"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>
            </div>

            {{-- Password --}}
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <label for="password" class="form-label small fw-bold mb-0" style="color: var(--jk-text);">
                        Kata Sandi
                    </label>
                    <a href="#" class="jk-link-primary" style="font-size: 0.75rem;">Lupa Sandi?</a>
                </div>
                <div class="input-group jk-input-group">
                    <span class="input-group-text">
                        <i class="bi bi-key"></i>
                    </span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="••••••••"
                        required
                    >
                    <button
                        type="button"
                        class="btn btn-toggle-password"
                        id="togglePassword"
                        aria-label="Tampilkan atau sembunyikan kata sandi"
                    >
                        <i class="bi bi-eye" id="togglePasswordIcon"></i>
                    </button>
                </div>
            </div>

            {{-- Remember & Encryption --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check mb-0">
                    <input
                        class="form-check-input jk-form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <label class="form-check-label small fw-medium" for="remember" style="color: var(--jk-text-muted);">
                        Ingat saya di perangkat ini
                    </label>
                </div>
                <span class="small d-inline-flex align-items-center gap-1" style="color: var(--jk-text-subtle); font-size: 0.75rem;">
                    <i class="bi bi-shield-check" style="color: var(--jk-primary);"></i>
                    Terenkripsi 256-bit
                </span>
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn jk-btn-primary jk-btn-submit w-100 d-flex align-items-center justify-content-center gap-2">
                <span>Masuk ke Jamu Kita</span>
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>

        {{-- Register CTA --}}
        <div class="jk-register-box text-center mt-4">
            <p class="small mb-1" style="color: var(--jk-text-muted);">
                Belum menjadi anggota keluarga Jamu Kita?
            </p>
            <a href="#" class="jk-link-primary small">
                Daftar Sekarang &amp; Dapatkan Racikan Gratis Pertama &rarr;
            </a>
        </div>

        {{-- Trust Footer --}}
        <div class="text-center mt-3">
            <span class="d-inline-flex align-items-center gap-1" style="color: var(--jk-text-subtle); font-size: 0.75rem;">
                <i class="bi bi-leaf" style="color: #5b7d42;"></i>
                Didukung Asosiasi Apoteker Herbal Indonesia (AAHI)
            </span>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePasswordIcon');

        if (toggleButton && passwordInput && toggleIcon) {
            toggleButton.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                toggleIcon.classList.toggle('bi-eye', !isPassword);
                toggleIcon.classList.toggle('bi-eye-slash', isPassword);
            });
        }
    });
</script>
@endpush
