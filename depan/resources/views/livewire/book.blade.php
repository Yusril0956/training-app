<div>
    <x-page.header>
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title fw-normal">
                    Books
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a
                        href="{{ route('book.add') }}"
                        class="btn btn-primary"
                        wire:navigate
                    >
                        <x-heroicon-o-plus />
                        Add
                    </a>
                </div>
            </div>
        </div>
    </x-page.header>
    <x-page.body>
        <x-card>
            <x-card.body class="border-bottom">
                <div class="d-flex">
                    <div class="text-muted">
                        <div class="mx-2 d-inline-block">
                            <x-select
                                inline
                                wire:model.change="rowsPerPage"
                            >
                                @foreach ($rowsPerPageOptions as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    </div>
                    <div class="ms-auto text-muted">
                        <div class="ms-2 d-inline-block">
                            <x-search
                                placeholder="Search"
                                wire:model.live="search"
                            />
                        </div>
                    </div>
                </div>
            </x-card.body>
            <x-table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Rating</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->author }}</td>
                            <td>{{ $item->rating }}</td>
                            <td class="text-center">
                                <a
                                    href="{{ route('book.edit', ['book' => $item]) }}"
                                    type="button"
                                    class="btn btn-warning"
                                >
                                    Edit
                                </a>
                                <a
                                    onclick="return confirm('Are you sure you want to delete this book?')"
                                    href="{{ route('book.delete', ['book' => $item]) }}"
                                    type="button"
                                    class="btn btn-danger"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-table>
            <x-card.footer class="d-flex align-items-center">
                <x-pagination :resources="$books" />
            </x-card.footer>
        </x-card>
    </x-page.body>
</div>
