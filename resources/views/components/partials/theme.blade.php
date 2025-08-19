<button
    x-on:click="toggle"
    class="nav-link px-0"
    title="Toggle Dark Mode"
    data-bs-toggle="tooltip"
    data-bs-placement="bottom"
>
    <template x-if="dark">
        <x-heroicon-o-sun />
    </template>
    <template x-if="!dark">
        <x-heroicon-o-moon />
    </template>
</button>
