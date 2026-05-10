@extends('layouts.app')
@section('title', 'Certificados')

@section('content')
  <section class="wrapper">
    <div class="inner padding-mobile">
      <x-utils.titulo titulo="Certificados" />
    </div>
  </section>
  <x-galeria-certificados />
@endsection