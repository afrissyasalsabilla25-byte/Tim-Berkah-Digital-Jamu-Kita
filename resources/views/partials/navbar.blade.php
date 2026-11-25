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
                <span class="jk-brand-subtitle">Apotek Herbal Tradisional</span>
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

        <div class="collapse navbar-collapse justify-content-end mt-3 mt-lg-0" id="jkNavbarNav">
            <ul class="navbar-nav align-items-lg-center gap-2">
                <li class="nav-item">
                    <a class="jk-nav-pill d-inline-block" href="{{ route('login') }}#tentang-kami">
                        Tentang Kami
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="btn jk-btn-primary jk-btn-nav-login" href="{{ route('login') }}#portal-login">
                            Login
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn jk-btn-primary jk-btn-nav-login">
                                Keluar
                            </button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
