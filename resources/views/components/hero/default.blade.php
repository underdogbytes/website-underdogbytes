{{-- resources/views/components/hero.blade.php --}}
@props([
'title',
'subtitle' => null,
'primaryText' => null,
'primaryLink' => '#',
'secondaryText' => null,
'secondaryLink' => '#',
'image' => null, // url opcional para imagem de background
'eyebrow' => null, // texto pequeno acima do título (opcional)
])

<header class="hero {{ $image ? 'hero--has-bg' : '' }}" role="banner" @if($image)
  style="background-image: url('{{ $image }}');" @endif>
  <div class="hero__overlay" aria-hidden="true"></div>

  <div class="content hero__container">
    @if(!empty($eyebrow))
    <div class="hero__eyebrow">{{ $eyebrow }}</div>
    @endif

    <h1 class="hero__title">
      {!! $title !!}
    </h1>

    @if(!empty($subtitle))
    <p class="hero__subtitle">
      {!! $subtitle !!}
    </p>
    @endif

    <div class="hero__ctas" role="navigation" aria-label="Ações principais">
      @if(!empty($primaryText))
      <a href="{{ $primaryLink }}" class="hero__btn hero__btn--primary" role="button">
        {{ $primaryText }}
      </a>
      @endif

      @if(!empty($secondaryText))
      <a href="{{ $secondaryLink }}" class="hero__btn hero__btn--secondary" role="button">
        {{ $secondaryText }}
      </a>
      @endif
    </div>

    <p class="hero__note" aria-hidden="false">
      <span class="hero__note-strong">Entrega rápida</span> · Suporte 30 dias · Garantia de 6 meses
    </p>
  </div>
</header>