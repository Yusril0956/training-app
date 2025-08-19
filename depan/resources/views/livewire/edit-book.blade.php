<div>
    <x-page.header>
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title fw-normal">
                    Edit Book
                </h2>
            </div>
        </div>
    </x-page.header>
    <x-page.body>
        <x-card>
            <form wire:submit="update">
                <x-card.header>
                    <h5 class="modal-title fw-normal">
                        Edit Book
                    </h5>
                </x-card.header>
                <x-card.body>
                    <div class="row">
                        <div class="col-lg-6">
                            <x-input
                                label="Title"
                                placeholder="Book Title"
                                wire:model="title"
                            />
                        </div>
                        <div class="col-lg-6">
                            <x-input
                                label="Author"
                                placeholder="Book Author"
                                wire:model="author"
                            />
                        </div>
                        <div class="col-lg-6">
                            <x-select
                                label="Rating"
                                wire:model="rating"
                            >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </x-select>
                        </div>
                    </div>
                </x-card.body>
                <x-card.footer class="d-flex">
                    <a
                        href="{{ route('book.list') }}"
                        class="btn btn-link"
                        wire:navigate
                    >
                        Back
                    </a>
                    <x-button
                        color="primary"
                        class="ms-auto"
                    >
                        <x-loading />
                        Save
                    </x-button>
                </x-card.footer>
            </form>
        </x-card>
    </x-page.body>
</div>
