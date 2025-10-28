@extends('layouts.app')
@section('title', 'Aleatoriedades')

@section('content')
  <section>
    <div class="inner padding-mobile">
      <x-utils.titulo titulo="Eu disse que era algo aleatório" />
      <img
        src="{{ asset($imagem['src']) }}"
        alt="{{ $imagem['alt'] }}"
      />
      <p>Obrigada por visitar, volte logo! :D</p>
    </div>
  </section>
@endsection