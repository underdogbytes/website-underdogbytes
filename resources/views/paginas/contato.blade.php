@extends('layouts.app')

@section('content')
  <section>
    <div class="inner">
      <x-utils.titulo titulo="Underdogbytes" />
      <div>
        <p>
          Olá, meu nome é Beatriz Pereira Lima :)
          <br>
          Sou a pessoa da foto aqui:
        </p>

        <img
          src="{{ asset('imagens/eu.webp') }}"
          alt="Pessoa de cabelo médio olhando para baixo
            segurando um teclado mecânico com uma mão
            e usando um negócio de remover tecla em outra mão"
          width="250"
        />

        <p>
          Sou um animal simples: gosto de plantas, animais, comer e estudar.
        </p>

        <p>
          Para fins trabalhistas:
          <br>
          Quero deixar evidente que a decisão de fazer um website
          como nos primórdios da internet foi uma decisão lúcida.
          <br>
          Genuinamente estou cansada de codar tanta coisa comercial.
          E essa escolha além de aliviar minha alma,
          me permite ter mais tempo para criar minhas coisas,
          focando no conteúdo e menos na aaaaaesthethic :p
          <br><br>
          Na verdade, podem falar muitas coisas do meu website.
          <br>
          Menos que ele não funciona e carrega rápido. :D
        </p>
      </div>
    </div>
  </section>
  <x-contato />
@endsection