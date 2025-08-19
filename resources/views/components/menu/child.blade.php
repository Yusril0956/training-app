@props([
    'modules' => [],
])

@foreach ($modules as $module)
    @if (!empty($module->sub_modules))
        <div class="dropend">
            <a
                href="#"
                class="dropdown-item dropdown-toggle"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                role="button"
                aria-expanded="false"
            >
                <x-heroicon-o-book-open class="icon-inline me-1" />
                {{-- <x-dynamic-component :component="$module->icon" /> --}}
                {{ $module->name }}
            </a>
            <div class="dropdown-menu">
                <x-menu.child :modules="$module->sub_modules" />
            </div>
        </div>
    @else
        <a
            class="dropdown-item"
            {{-- href="{{ route($module->route) }}" --}}
        >
            <x-heroicon-o-book-open class="icon-inline me-1" />
            {{-- <x-dynamic-component :component="$module->icon" /> --}}
            {{ $module->name }}
        </a>
    @endif
@endforeach
