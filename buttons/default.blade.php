@props(['type' => 'button', 'label'])

<button type="{{ $type }}"
    {{ $attributes }}
    class="inline-block py-1 px-3 text-xs rounded-full border border-black hover:bg-black hover:text-white transition">
        {{ $label ?? '' }}
</button>