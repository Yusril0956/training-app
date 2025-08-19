@props(['label', 'text', 'switchClass'])

<div class="mb-3">
    <div class="form-label">{{ $label }}</div>
    <label class="form-check form-switch {{ $switchClass }}">
        <input
            class="form-check-input"
            type="checkbox"
            {{ $attributes }}
        >
        <span class="form-check-label">{{ $text }}</span>
    </label>
</div>
