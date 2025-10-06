<div class="popup popup--mini">
  <div class="popup__header">
    <{{ $tipo ?? 'h2' }} class="popup__header__title">{!! $titulo !!}</{{ $tipo ?? 'h2' }}>
  </div>

  <div class="popup__body">
    {!! $texto !!}
  </div>
</div>