<div class="card card--y2k">
  <div class="card__header">
    <{{ $tipo ?? 'h2' }} class="card__header__title">{!! $titulo !!}</{{ $tipo ?? 'h2' }}>

    <div class="card__header__buttons-container">
      <button>X</button>
    </div>
  </div>

  <div class="card__body">
    {!! $texto !!}
  </div>
</div>