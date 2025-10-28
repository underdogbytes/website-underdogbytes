@extends('layouts.app')
@section('title', 'Contato')

@section('content')
  <section>
    <div class="inner padding-mobile">
      <x-utils.titulo titulo="Underdogbytes" />
      <x-sobre.bio />
      <x-utils.cards.support-me />
    </div>
  </section>
  <x-contato />
@endsection