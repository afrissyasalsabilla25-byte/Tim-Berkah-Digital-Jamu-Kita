@extends('layouts.app')

@section('title', 'Beranda - Jamu Kita')

@section('content')
    <section id="tentang-jamu-kita" class="pt-4 pb-5">
        <div class="container">
            <div class="jk-beranda-hero-card">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="jk-beranda-media">
                            <img
                                src="{{ asset('images/hero-jamu.jpg') }}"
                                alt="Seduhan Jamu Tradisional Jamu Kita"
                                onerror="this.style.display='none'"
                            >
                            <span class="jk-media-top-badge">
                                <i class="bi bi-leaf text-success"></i>
                                100% Organik Lereng Merapi
                            </span>

                            <div class="jk-media-bottom-card d-flex align-items-center justify-content-between gap-2">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="jk-media-icon-box">
                                        <i class="bi bi-hourglass-split"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold small">Warisan Racikan 1928</div>
                                        <div class="text-muted" style="font-size: 0.75rem;">
                                            Metode sangrai gentong tanah liat tradisional
                                        </div>
                                    </div>
                                </div>
                                <div class="fw-bold small text-nowrap" style="color: #9e3d19;">
                                    <i class="bi bi-star-fill text-warning me-1"></i>4.9/5.0
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 px-lg-4">
                        <span class="jk-badge-portal mb-3">
                            <i class="bi bi-award-fill"></i>
                            Tentang Jamu Kita
                        </span>

                        <h1 class="font-serif fw-bold mb-3" style="font-size: clamp(1.75rem, 3vw, 2.35rem); line-height: 1.2;">
                            Menghidupkan Tradisi Rempah untuk Jiwa &amp; Raga Nusantara
                        </h1>

                        <p class="mb-3" style="color: var(--jk-text-muted); line-height: 1.75; font-size: 0.94rem;">
                            Berakar dari resep turun-temurun keraton Surakarta sejak tahun 1928, <strong>Jamu Kita</strong> meracik kembali kearifan botani Indonesia menjadi minuman kebugaran modern yang nikmat, murni, dan tanpa bahan pengawet sintetis.
                        </p>

                        <p class="mb-4" style="color: var(--jk-text-muted); line-height: 1.75; font-size: 0.94rem;">
                            Setiap tetes memadukan rimpang segar kunyit biang, kencur wangi, temulawak pilihan, serta madu hutan liar yang dipanen secara lestari bersama komunitas petani lokal lereng Gunung Merapi dan Kulon Progo.
                        </p>

                        <div class="row g-3">
                            <div class="col-4">
                                <div class="jk-stat-box">
                                    <div class="jk-stat-value">50+</div>
                                    <div class="jk-stat-label">Varian Resep Alami</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="jk-stat-box">
                                    <div class="jk-stat-value">100%</div>
                                    <div class="jk-stat-label">Bahan Petani Lokal</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="jk-stat-box">
                                    <div class="jk-stat-value">BPOM</div>
                                    <div class="jk-stat-label">Higienis &amp; Teruji</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="katalog-produk" class="pb-5">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-3 mb-4">
                <div>
                    <span class="jk-badge-portal mb-2">
                        <i class="bi bi-book-half"></i>
                        Koleksi Terkurasi
                    </span>
                    <h2 class="font-serif fw-bold mb-2">Katalog Racikan Produk Pilihan</h2>
                    <p class="mb-0" style="color: var(--jk-text-muted); max-width: 600px; font-size: 0.94rem;">
                        Pilihan racikan segar harian siap minum dingin atau seduhan hangat, diproses higienis setiap pagi untuk mendampingi gaya hidup sehat Anda.
                    </p>
                </div>

                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Filter kategori produk">
                    <button type="button" class="jk-filter-pill active" data-filter="all">Semua Varian</button>
                    <button type="button" class="jk-filter-pill" data-filter="imunitas">Imunitas &amp; Detoks</button>
                    <button type="button" class="jk-filter-pill" data-filter="stamina">Stamina &amp; Pegal</button>
                    <button type="button" class="jk-filter-pill" data-filter="pencernaan">Pencernaan</button>
                </div>
            </div>

            <div class="row g-4" id="jkProductGrid">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 jk-product-item" data-category="{{ $product['category_filter'] }}">
                        <div class="jk-catalog-card">
                            <div class="jk-catalog-thumb">
                                <img
                                    src="{{ asset($product['image']) }}"
                                    alt="{{ $product['name'] }}"
                                    onerror="this.style.display='none'"
                                >
                                <span class="jk-thumb-badge">{{ $product['top_badge'] }}</span>
                                <button
                                    type="button"
                                    class="jk-wishlist-btn"
                                    aria-label="Simpan {{ $product['name'] }} ke favorit"
                                >
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>

                            <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 0.05em; color: var(--jk-primary);">
                                            {{ $product['category_label'] }}
                                        </span>
                                        <span class="small fw-semibold" style="color: var(--jk-text-muted);">
                                            <i class="bi bi-star-fill text-warning me-1"></i>{{ $product['rating'] }}
                                        </span>
                                    </div>

                                    <h3 class="font-serif fw-bold fs-5 mb-2">{{ $product['name'] }}</h3>
                                    <p class="small mb-3" style="color: var(--jk-text-muted); line-height: 1.65;">
                                        {{ $product['description'] }}
                                    </p>

                                    <div class="d-flex flex-wrap gap-2 mb-4">
                                        @foreach ($product['attributes'] as $attr)
                                            <span class="jk-attr-chip">{{ $attr }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="pt-3 border-top d-flex align-items-center justify-content-between gap-2" style="border-color: var(--jk-border) !important;">
                                    <div>
                                        <div class="text-muted" style="font-size: 0.72rem;">Harga Botol</div>
                                        <div class="jk-price-text">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>
                                    </div>

                                    @if ($product['is_available'])
                                        <button
                                            type="button"
                                            class="btn jk-btn-primary rounded-pill px-3 py-2 small jk-add-to-cart"
                                            data-product="{{ $product['name'] }}"
                                        >
                                            <i class="bi bi-cart-plus me-1"></i>+ Keranjang
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-secondary rounded-pill px-3 py-2 small" disabled>
                                            Habis
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.jk-filter-pill');
        const productItems = document.querySelectorAll('.jk-product-item');

        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                filterButtons.forEach((btn) => btn.classList.remove('active'));
                button.classList.add('active');

                const filter = button.dataset.filter;
                productItems.forEach((item) => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.classList.remove('d-none');
                    } else {
                        item.classList.add('d-none');
                    }
                });
            });
        });

        document.querySelectorAll('.jk-wishlist-btn').forEach((btn) => {
            btn.addEventListener('click', () => {
                btn.classList.toggle('active');
                const icon = btn.querySelector('i');
                icon.classList.toggle('bi-heart');
                icon.classList.toggle('bi-heart-fill');
            });
        });
    });
</script>
@endpush
