@extends('layouts.app')

@section('title', 'Página não encontrada')

@section('content')
<div class="error-page">
  <h1 class="error-page__title">404</h1>
  <p class="error-page__text">Página inexistente.</p>
  <a href="{{ url('/') }}" class="error-page__button">Voltar ao início</a>
</div>
@endsection