<x-page.body>
    <div class="row row-cards">
        <div class="col-6">
            <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                        <x-heroicon-o-code-bracket />
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h3 class="h1">Tabler Admin Template</h3>
                            <div class="markdown text-secondary">
                                Tabler is a free and open source web application UI kit based on Bootstrap 5, with
                                hundreds responsive components and multiple layouts.
                            </div>
                            <div class="mt-3">
                                <a
                                    href="http://gitlab.indonesian-aerospace.com/mfahrul/tabler-admin-template/-/archive/master/tabler-admin-template-master.zip"
                                    class="btn btn-primary"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    <x-heroicon-o-arrow-down-tray />
                                    Download Template
                                </a>
                                <a
                                    href="https://preview.tabler.io/"
                                    class="btn btn-secondary"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    <x-heroicon-o-magnifying-glass />
                                    Preview Template
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @auth
            <div class="col-6">
                <div class="card card-md">
                    <div class="card-stamp card-stamp-lg">
                        <div class="card-stamp-icon bg-primary">
                            <x-heroicon-o-user />
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="h1">Authenticated User</h3>
                        <div class="markdown text-secondary">
                            <ul class="list-unstyled">
                                <li>
                                    <b>NIK</b> : {{ Session::get('user')->nik }}
                                </li>
                                <li>
                                    <b>Name</b> : {{ Session::get('user')->name }}
                                </li>
                                <li>
                                    <b>Email</b> : {{ Session::get('user')->email }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
        <div class="col-6">
            <img
                class="card"
                src="{{ asset('static/og.png') }}"
            >
        </div>
    </div>
</x-page.body>
