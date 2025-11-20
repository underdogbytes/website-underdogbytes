<section class="services" id="servicos">
  <div class="content services__container">

    <header class="services__header">
      <h2 class="services__title">{{ $title }}</h2>

      @if($subtitle)
      <p class="services__subtitle">{{ $subtitle }}</p>
      @endif
    </header>

    <div class="services__grid">
      @foreach($items as $service)
      <a class="services__a__item" href="{{ $service['link'] }}">
        <div class="services__item">

          @if(!empty($service['icon']))
          <div class="services__icon" aria-hidden="true">
            {!! $service['icon'] !!}
          </div>
          @endif

          <h3 class="services__item-title">
            {{ $service['title'] }}
          </h3>

          <p class="services__item-text">
            {{ $service['text'] }}
          </p>

          <div class="services__item__btns">
            <button>Solicitar proposta</button>
          </div>
        </div>
      </a>
      @endforeach
    </div>

  </div>
</section>