<section id="projetos">
    <div class="inner">
        <x-utils.titulo
            titulo="Projetos selecionados"
        />

        <ul class="galeria">
            <x-projetos.item
                imgSrc="{{ asset('images/olachico.png') }}"
                nome="Olá Chico"
                dataTrabalho="2024"
                tipo="Website Portfólio"
                descricao="Desenvolvi o website portfólio de Chico,
                    artista contemporâneo de Curitiba, especializado em quadros e murais de alto padrão.
                    Através das cores, formas e materiais diversos, Chico cria narrativas visuais únicas.
                    O site reflete essa identidade artística, proporcionando uma experiência imersiva.
                    Sigo acompanhando o projeto, oferecendo suporte e manutenção para
                    garantir a melhor performance atualização contínua."
                linkExterno="https://olachico.com"
            />

            <x-projetos.item
                imgSrc="{{ asset('images/dislexia.png') }}"
                nome="EduEdu Alfabetização"
                dataTrabalho="2024"
                tipo="Aplicativo"
                descricao="O aplicativo da EduEdu, desenvolvido em parceria com o Instituto ABCD,
                    foi criado para apoiar crianças com dificuldades de leitura e escrita.
                    Na versão 2 do projeto, atuei ativamente enquanto prestava meus serviços à empresa <a href='https://lyncas.net' target='_blank'>Lyncas</a>,
                    contribuindo para aprimorar a experiência e a acessibilidade do app,
                    além de manter um código limpo e estruturado."
            />

            <x-projetos.item
                imgSrc="{{ asset('images/colecoes-fauna-do-brasil.png') }}"
                nome="Coleções Fauna do Brasil"
                dataTrabalho="2022"
                tipo="E-commerce OpenCart"
                descricao="Coleções Fauna do Brasil é uma loja de empreendedorismo sustentável de Curitiba
                    que traz bichinhos de pelúcia inspirados na fauna brasileira.
                    Além de encantar, a marca conscientiza seus clientes sobre a
                    importância da preservação e alerta sobre espécies ameaçadas.
                    Foi um grande prazer contribuir para este projeto!"
            />

            <x-projetos.item
                imgSrc="{{ asset('images/mais-futuro.png') }}"
                nome="Aplicativo Mais Futuro"
                dataTrabalho="2022-2024"
                tipo="Aplicativo PWA em VueJS"
                descricao="Dediquei dois anos, atuei em tempo integral no desenvolvimento do <a href='https://www.maisfuturo.com.br' target='_blank' rel='noopener noreferrer'>aplicativo PWA da Mais Futuro</a>,
                    uma empresa de previdência privada do Paraná.
                    Trabalhei tanto no design UI/UX quanto na implementação em Vue.js,
                    garantindo uma experiência intuitiva e eficiente para os usuários."
            />

            <x-projetos.item
                imgSrc="{{ asset('images/tempestade-criativa.png') }}"
                dataTrabalho="2022"
                nome="Tempestade Criativa"
                tipo="Landing Page em Laravel"
                descricao="Fui responsável pelo desenvolvimento da landing page desta agência,
                    criando uma página eficiente com navegação fluída."
            />
        </ul>
    </div>
</section>