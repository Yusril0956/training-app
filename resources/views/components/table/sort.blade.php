@props(['sort', 'field'])

<th
    class="cursor-pointer"
    wire:click="sortBy('{{ $field }}')"
>
    @if ($sort['field'] == $field)
        @if ($sort['dir'] == 'asc')
            <x-icon.arrow-up />
        @else
            <x-icon.arrow-down />
        @endif
    @else
        <x-icon.arrow-sort />
    @endif
    {{ $slot }}
</th>
