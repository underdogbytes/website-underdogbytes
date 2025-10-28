@extends('layouts.app')
@section('title', 'Página Inicial')

@section('content')
    <div class="inner">
        <x-win98.screen-shorcuts />
   </div>
    <x-projetos.destaques-home />
    <x-duvidas-frequentes />
    <x-contato />
@endsection