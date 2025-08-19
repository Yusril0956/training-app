<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-menu"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <x-heroicon-o-bars-3 />
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a
                href="{{ route('home') }}"
                class="text-decoration-none"
            >
                <img
                    src="{{ config('app.icon') ?? asset('static/home_logo_only.png') }}"
                    width="110"
                    height="32"
                    class="navbar-brand-image"
                >&nbsp;<span class="fw-medium">{{ config('app.name') }}</span>
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <x-partials.theme />
            <x-partials.userbox />
        </div>
    </div>
</header>
