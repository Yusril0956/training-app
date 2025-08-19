<header class="navbar-expand-md">
    {{-- @dump(config('app.modules')) --}}
    <div
        class="collapse navbar-collapse"
        id="navbar-menu"
    >
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li @class([
                        'nav-item' => true,
                        'active' => Route::currentRouteName() == 'book',
                    ])>
                        <a
                            wire:navigate
                            class="nav-link"
                            href="{{ route('book.list') }}"
                        >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-heroicon-o-book-open />
                            </span>
                            <span class="nav-link-title">
                                Book
                            </span>
                        </a>
                    </li>
                    @foreach (config('app.modules') as $module)
                        <li @class([
                            'nav-item' => true,
                            'dropdown' => !empty($module->sub_modules),
                        ])>
                            <a {{-- blade-formatter-disable --}}
                                @if (!empty($module->sub_modules)) 
                                    href="#"
                                    class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"
                                    role="button"
                                    aria-expanded="false"
                                @else
                                    wire:navigate
                                    class="nav-link"
                                    {{-- href="{{ route($module->route) }}" --}}
                                @endif
                                {{-- blade-formatter-enable --}}>
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <x-dynamic-component :component="$module->icon" />
                                </span>
                                <span class="nav-link-title">
                                    {{ $module->name }}
                                </span>
                            </a>
                            @if (!empty($module->sub_modules))
                                <div class="dropdown-menu">
                                    <x-menu.child :modules="$module->sub_modules" />
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
