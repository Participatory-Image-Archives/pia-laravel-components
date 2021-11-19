@props(['label' => 'Delete'])

<button type="submit"
    {{ $attributes }}
    class="inline-block py-1 px-3 text-xs mb-2 rounded-full border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition"
    x-data @click.prevent="() => {
        if (confirm('Really delete?')) {
            console.log($el.closest('form').submit());
        } 
    }">
        {{ $label }}
</button>