@extends('layouts.app')

@section('content')
    <x-utils.titulo titulo="Bem-vindo ao meu website! :D" />
    <div class="inner">
        <x-utils.cards.y2k
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
@endsection