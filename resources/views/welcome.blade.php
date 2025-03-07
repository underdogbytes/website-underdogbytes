@extends('layouts.app')

@section('content')
<section>
    <x-utils.titulo titulo="Bem-vindo ao meu website! :D" />

    <div class="inner">
        <p>
            Bom dia! ^-^
            <br>
            Espero que esteja bem.
        </p>

        <p>
            Meu nome é Beatriz Lima, engenheira de Software e criadora de bugigangas.
            <br>
            Veja alguns dos meus projetos abaixo e até breve! ♥
        </p>
    </div>

    <x-projetos.galeria />
</section>
@endsection