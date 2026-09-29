<article class="card" aria-labelledby="{{ $id }}">
  <div class="thumb">
    <img src="{{ asset($imgSrc) }}" alt="{!! $imgAlt !!}">
  </div>
  <h3 id="{{ $id }}">{!! $name !!}</h3>
  <div>
    <p>
      {!! $description !!}
      @if($prodLink ?? false && $prodText ?? false)
          Confira mais em: <a href="{{ $prodLink }}" target="_blank">{!! $prodText !!}</a>
      @endif
    </p>
  </div>
</article>