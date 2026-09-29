@extends('layouts.app')
@section('title', 'Página Inicial')

@section('content')
<x-hero.v1 />
<x-servicos.v1 />
<x-processos />
<x-projetos.minimalist.v1 />
<x-contato.v1 />
@endsection