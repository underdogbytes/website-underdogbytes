@extends('layouts.app')

@section('content')
<section>
    <x-utils.titulo titulo="Bem-vindo ao meu website! :D" />

    <div class="inner">
        <div class="hero__content">
            <p>
                Bom dia! ^-^
                <br>
                Espero que esteja bem.
            </p>
            
            <p>
                Meu nome é Beatriz Lima, engenheira de software e criadora de bugigangas.
                <br>
                Explore alguns dos meus projetos abaixo e
                entre em contato para saber mais sobre meu trabalho
                em desenvolvimento web,
                design de interfaces, ilustrações e soluções personalizadas.
                <br><br>
                Até breve! ♥
            </p>
        </div>
    </div>

    <x-projetos.galeria />
</section>
@endsection