<li class="item">
    <img
        src="{{ $imgSrc }}"
        alt="{{ $imgAlt ? $imgAlt : "" }}"
    />

    <div class="detalhes">
        @isset($nome)
        <h3 class="titulo">
            {{ $nome }}
            @isset($dataTrabalho)
                <small>
                    ({{ $dataTrabalho }})
                </small>
            @endisset
        </h3>
        @endisset

        @isset($tipo)
            <small>{{ $tipo }}</small>
        @endisset
        
        @isset($descricao)
            <p>
                <b>Sobre o projeto:</b>
                <br>
                {{ $descricao }}
            </p>    
        @endisset

        @isset($linkHref)
            <small>
                <b>Visite o site:</b> <a href="{{ $linkHref }}">{{ $linkTexto ? $linkTexto : $linkHref }}</a>
            </small>
        @endisset
    </div>
</li>