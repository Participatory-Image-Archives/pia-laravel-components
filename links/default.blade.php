<a {{ $attributes->merge([
    'class' => 
        'inline-block py-1 px-3 text-xs rounded-full border border-black bg-black text-white hover:bg-white hover:text-black transition'
]) }}> {{ $label ?? '' }}</a>