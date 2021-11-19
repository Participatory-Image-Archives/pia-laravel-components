@props(['type' => 'button', 'label'])

<button type="{{ $type }}"
    {{ $attributes }}
    class="inline-block py-1 text-xs underline">
        {{ $label }}
</button>