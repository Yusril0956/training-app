@props(['center' => false])

<div class="input-group input-group-flat">
    @isset($icon)
        <span class="input-group-text">
            {{ $icon }}
        </span>
    @endisset
    <input
        type="text"
        class="form-control @if ($center) text-center @endif"
        x-on:keyup.ctrl.slash.document="$el.focus()"
        x-on:keyup.esc.document="$el.blur()"
        {{ $attributes }}
    >

    <span class="input-group-text">
        <kbd>Ctrl</kbd>
        &nbsp;
        <kbd>/</kbd>
    </span>
</div>
