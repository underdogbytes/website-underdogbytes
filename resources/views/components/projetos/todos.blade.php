<section id="projetos">
    <div class="inner">
        <x-utils.titulo
            titulo="Projetos"
        />

        <div class="grid--cards">
            @foreach ($projetos as $item)       
                <x-projetos.card-img
                    name="{{ $item['name'] }}"
                    type="{{ $item['type'] }}"
                    src="{{ asset($item['src']) }}"
                    alt="{{ $item['alt'] }}"
                />
            @endforeach
        </div>
    </div>
</section>