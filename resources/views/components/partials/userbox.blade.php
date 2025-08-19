@auth
    <a
        href="{{ route('logout') }}"
        class="nav-link px-0"
        title="Logout"
        data-bs-toggle="tooltip"
        data-bs-placement="bottom"
    >
        <x-heroicon-o-arrow-right-on-rectangle />
    </a>
    <span class="nav-link d-flex lh-1 text-reset p-0">
        <span
            class="avatar avatar-sm ms-2"
            style="background-image: url({{ Session::get('user')->photo_url }})"
        >
        </span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ ucwords(strtolower(Auth::user()->name)) }}</div>
            <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
        </div>
    </span>
@else
    <a
        href="{{ route('login') }}"
        class="nav-link px-0"
        title="Login"
        data-bs-toggle="tooltip"
        data-bs-placement="bottom"
    >
        <x-heroicon-o-arrow-right-end-on-rectangle />
    </a>
@endauth
