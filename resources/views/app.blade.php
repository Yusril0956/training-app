<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link
        rel="icon"
        href={{ asset('ptdi.ico') }}
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, viewport-fit=cover"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>{{ config('app.name') }}</title>
    <!-- CSS files -->
    <link
        href={{ asset('dist/css/tabler.min.css') }}
        rel="stylesheet"
    />
    <link
        href={{ asset('dist/css/tabler-vendors.min.css') }}
        rel="stylesheet"
    />
    <link
        href={{ asset('dist/css/demo.min.css') }}
        rel="stylesheet"
    />
    <link
        href={{ asset('dist/css/font.css') }}
        rel="stylesheet"
    />
    <style>
        .company-color {
            color: #2F318B
        }

        [data-bs-theme=dark] .company-color {
            color: white
        }

        .hidden {
            display: none
        }

        [x-cloak] {
            display: none !important;
        }

        .bg-image {
            background-image: url("/background.svg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    @stack('style')
    <!-- JS files -->
    <script src={{ asset('dist/js/jquery-3.7.0.js') }}></script>
    <script src={{ asset('dist/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('dist/js/dataTables.bootstrap5.min.js') }}></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    x-data="darkMode"
    x-init="init"
    x-effect="set"
    x-on:storage.window="init"
>
    <div class="page {{ Auth::check() ? '' : 'page-center' }} bg-image">
        <x-partials.header />
        @auth
            <x-partials.navbar />
        @endauth
        <div class="page-wrapper">
            {{ $slot }}
        </div>
        <x-partials.footer />
    </div>
    <!-- another JS files -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('darkMode', () => ({
                dark: false,
                init() {
                    this.dark = this.storage.get()
                },
                toggle() {
                    this.dark = !this.dark
                },
                set() {
                    if (this.dark) {
                        document.body.setAttribute('data-bs-theme', 'dark')
                    } else {
                        document.body.removeAttribute('data-bs-theme')
                    }

                    this.storage.set(this.dark)
                },
                storage: {
                    key: '{{ config('app.name') }}-darkMode',
                    get() {
                        if (localStorage.getItem(this.key) == 'on') {
                            return true
                        } else {
                            return false
                        }
                    },
                    set(dark) {
                        if (dark) {
                            localStorage.setItem(this.key, 'on')
                        } else {
                            localStorage.setItem(this.key, 'off')
                        }
                    }
                },
                cleanModalBackdrop() {
                    const elements = document.getElementsByClassName('modal-backdrop');
                    while (elements.length > 0) {
                        elements[0].remove();
                    }
                }
            }))
        })
    </script>
    <script
        src={{ asset('dist/js/tabler.min.js') }}
        defer
    ></script>
    <script
        src={{ asset('dist/js/demo.min.js') }}
        defer
    ></script>
    <script
        src={{ asset('dist/libs/tom-select/dist/js/tom-select.base.min.js') }}
        defer
    ></script>
    <script
        src={{ asset('dist/libs/litepicker/dist/litepicker.js') }}
        defer
    ></script>
    <script
        src={{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}
        defer
    ></script>
    @stack('script')
</body>

</html>
