@extends('layouts.app')
@section('title', 'Projetos')

@section('content')
  <section class="inner padding-mobile">
    <x-projetos.todos :projetos="$projetos" />

    <div class="paginacao">
      {{ $projetos->links() }}
    </div>
  </section>
@endsection