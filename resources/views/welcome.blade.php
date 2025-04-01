@extends('layouts.app')
@section('title', 'Página Inicial')

@section('content')
    <div class="inner">
        <x-utils.titulo titulo="Bem-vindo ao meu website! :D" />
        <x-win98.screen-shorcuts />
        <x-utils.cards.y2k
            tipo="h3"
            titulo="Você recebeu uma mensagem"
            texto="<p>
            Bom dia! ^-^
            <br>
            Espero que esteja bem.
            </p>

            <p>
                Meu nome é Beatriz Lima, engenheira de software e criadora de bugigangas.
                <br>
                Explore alguns dos meus projetos abaixo e
                entre em <a href='#contato'>contato</a> para saber mais sobre meu trabalho
                em desenvolvimento web,
                design de interfaces, ilustrações e soluções personalizadas.
                <br><br>
                Até breve! ♥
            </p>"
        />
   </div>
    <x-projetos.galeria />
    <x-contato />
    <x-duvidas-frequentes />
@endsection