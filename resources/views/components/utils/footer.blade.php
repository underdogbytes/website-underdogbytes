<footer>
    <div id="taskMenu" class="taskbar__menu">
        <div class="taskbar__menu__content">
            <x-utils.buttons.default link="/" label="Home" />
            <x-utils.buttons.default link="aleatoriedades" label="Aleatoriedades" />
            <x-utils.buttons.default link="blog" label="Blog" />
            <x-utils.buttons.default link="sobre" label="Sobre mim" />
            <x-utils.buttons.back-to-top />

            <small class="credits">
                ˙✧˖° Programado em Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                a base de muito yakissoba, chá e carinho de gatos ⋆｡˚✧
                <br>
                © by <a href="{{ url('/sobre') }}">Underdogbytes</a> 2025
            </small>
        </div>
    </div>

    <div class="taskbar">
        <button
            id="btn_start"
            class="start"
        >
            Início
        </button>

        <div class="tray">
            <a
                href="https://www.youtube.com/watch?v=9qbRHY1l0vc"
                target="_blank"
            >
                23:58
            </a>
        </div>
    </div>
</footer>