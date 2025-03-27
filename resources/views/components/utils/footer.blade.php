<footer>
    <div class="inner">
        <div>
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
        </div>
        <x-utils.buttons.back-to-top />
        <br>
        <small>
            Feito com Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            <br>
            © by <a href="{{ url('/contato') }}">Underdogbytes</a> 2025
        </small>
    </div>
</footer>