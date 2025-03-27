@extends('layouts.app')

@section('content')
  <section>
    <div class="inner">
      <x-utils.titulo titulo="Eu disse que era algo aleatório" />
      <img
        src="{{ $imagem['src'] }}"
        alt="{{ $imagem['alt'] }}"
      />
      <p>Obrigada por visitar, volte logo! :D</p>
    </div>
  </section>
@endsection