<footer>
    <div class="inner">
        <div class="btns">
            <x-utils.buttons.default
                link="/"
                label="Home"
            />

            <x-utils.buttons.default
                link="aleatoriedades"
                label="Aleatoriedades"
            />

            <x-utils.buttons.default
                link="blog"
                label="Blog"
            />
            <x-utils.buttons.back-to-top />
        </div>
        <br>
        <small>
            ˙✧˖° Programado em Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            a base de muito yakissoba, chá e carinho de gatos ⋆｡˚✧
            <br>
            © by <a href="{{ url('/contato') }}">Underdogbytes</a> 2025
        </small>
    </div>
</footer>