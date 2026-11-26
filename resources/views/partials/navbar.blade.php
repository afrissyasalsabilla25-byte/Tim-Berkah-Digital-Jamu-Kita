<nav class="navbar navbar-expand-lg jk-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('home') }}">
            <img
                src="{{ asset('images/logo projek ppl .jpeg') }}"
                alt="Logo Jamu Kita"
                class="jk-brand-logo"
            >
            <div class="d-flex flex-column">
                <span class="jk-brand-title">Jamu Kita</span>
                @guest
                    <span class="jk-brand-subtitle">Apotek Herbal Tradisional</span>
                @endguest
            </div>
        </a>

        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#jkNavbarNav"
            aria-controls="jkNavbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        @guest
            <div class="collapse navbar-collapse justify-content-end mt-3 mt-lg-0" id="jkNavbarNav">
                <ul class="navbar-nav align-items-lg-center gap-2">
                    <li class="nav-item">
                        <a class="jk-nav-pill d-inline-block" href="{{ route('login') }}#tentang-kami">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn jk-btn-primary jk-btn-nav-login" href="{{ route('login') }}#portal-login">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        @else
            <div class="collapse navbar-collapse mt-3 mt-lg-0" id="jkNavbarNav">
                <ul class="navbar-nav align-items-lg-center gap-2 ms-lg-4 me-auto">
                    <li class="nav-item">
                        <a
                            class="jk-nav-link d-inline-block {{ request()->routeIs('home', 'beranda') ? 'jk-nav-pill-active' : '' }}"
                            href="{{ route('home') }}"
                        >
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="jk-nav-link d-inline-block" href="{{ route('home') }}#katalog-produk">
                            Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="jk-nav-link d-inline-block" href="{{ route('home') }}#katalog-produk">
                            Pesanan Saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="jk-nav-link d-inline-block" href="{{ route('home') }}#tentang-jamu-kita">
                            Profil / Akun
                        </a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <a
                        href="{{ route('home') }}#katalog-produk"
                        class="jk-cart-btn position-relative text-decoration-none"
                        aria-label="Keranjang Belanja"
                    >
                        <i class="bi bi-bag fs-5"></i>
                        <span class="jk-cart-dot" id="jkCartBadge" aria-hidden="true"></span>
                    </a>

                    <span class="jk-user-name fw-semibold small">
                        {{ Auth::user()->name }}
                    </span>

                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn jk-btn-outline-soft btn-sm rounded-pill px-3">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
        @endguest
    </div>
</nav>
