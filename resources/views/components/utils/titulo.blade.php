<div class="secao-titulo">
   <div class="inner">
        @isset($titulo)
        <h2 class="titulo">{{ $titulo }}</h2>
        @endisset
        
        @isset($descricao)
        <p>{{ $descricao }}</p>
        @endisset
   </div>
</div>