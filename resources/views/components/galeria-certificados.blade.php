<div class="certificados-wrapper">
    <!-- Filtros -->
    <nav id="filtro-container">
        <button class="filtro-btn active" data-filter="todos">Todos</button>
        @foreach($categorias as $cat)
            <button class="filtro-btn" data-filter="{{ $cat }}">{{ ucfirst($cat) }}</button>
        @endforeach
    </nav>

    <!-- Grid -->
    <div id="certificados-grid">
        @foreach($certificados as $cert)
            <div class="cert-card" data-category="{{ $cert['categoria'] }}">
                <div class="cert-img-container">
                    <img src="{{ asset('images/certificados/' . $cert['imagem']) }}" alt="{{ $cert['titulo'] }}">
                </div>
                <h4>{{ $cert['titulo'] }}</h4>
            </div>
        @endforeach
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/galeria-certificados.js') }}"></script>
@endpush