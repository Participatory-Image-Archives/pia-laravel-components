<img class="w-full"
    style="image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges; min-height: 200px;"
    src="https://sipi.participatory-archives.ch/{{ $image['base_path'] }}/{{ $image['signature'] }}.jp2/full/50,/0/default.jpg"
    data-src="https://sipi.participatory-archives.ch/{{ $image['base_path'] }}/{{ $image['signature'] }}.jp2/full/320,/0/default.jpg"
    alt="{{ $image['title'] }}" title="{{ $image['title'] }}"
    x-intersect="$el.src = $el.dataset.src" @load="$el.style.minHeight = 'auto'">