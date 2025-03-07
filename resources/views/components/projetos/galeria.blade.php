<section>
    <div class="inner">
        <x-utils.titulo
            titulo="Projetos para Clientes"
        />

        <ul class="galeria">
            <x-projetos.item
                imgSrc="{{ asset('imagens/sorla-db.png') }}"
                nome="Sorla DB"
                dataTrabalho="2024"
                tipo="Landing Page"
                descricao="Essa biblioteca JavaScript que carrega o nome da mãe do criador,
                    é um projeto openSource, no qual desenvolvi o design da landing page."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/dislexia.png') }}"
                nome="EduEdu Alfabetização"
                dataTrabalho="2024"
                tipo="Aplicativo"
                descricao="Voltador para ajudar crianças com dificuldade em ler e escrever,
                    o aplicativo da EduEdu em parceria com o Instituto ABCD
                    foi um dos projetos no qual participei da versão dois
                    enquanto prestei meus serviços a empresa Lyncas."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/cej.png') }}"
                dataTrabalho="2024"
                nome="Colégio Evangélico Jaraguá"
                tipo="Portal de gerenciamento"
                descricao="O desenvolvimento de um novo portal para um colégio,
                    pensando tanto no uso para alunos quanto funcionários da escola,
                    foi um dos projetos que desenvolvi enquanto estava na empresa Lyncas."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/colecoes-fauna-do-brasil.png') }}"
                nome="Coleções Fauna do Brasil"
                dataTrabalho="2022"
                tipo="E-commerce OpenCart"
                linkHref="https://faunadobrasil.com.br"
                linkTexto="https://faunadobrasil.com.br"
                descricao="Coleções Fauna do Brasil é uma loja de empreendedorismo sustentável local
                    de bichinhos de pelúcia da fauna brasileira,
                    que conscientiza seus clientes da importância e o quão ameaçadas algumas espécies estão.
                    Foi um grande prazer trabalhar neste projeto."
                />

            <x-projetos.item
                imgSrc="{{ asset('imagens/mais-futuro.png') }}"
                nome="Aplicativo Mais Futuro"
                dataTrabalho="2022-2024"
                tipo="Aplicativo PWA em VueJS"
                descricao="
                    Dediquei dois anos nesse projeto de tempo integral
                    trabalhando tanto no design UI/UX e quanto desenvolvimento do aplicativo para a Mais Futuro,
                    uma empresa de previdência privada do Paraná."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/tempestade-criativa.png') }}"
                dataTrabalho="2022"
                nome="Tempestade Criativa"
                tipo="Landing Page em Laravel"
                descricao="Desenvolvi a landing page desta agência curitibana."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/escola-renovacao.png') }}"
                dataTrabalho="2022"
                nome="Escola Renovação"
                tipo="Website em Laravel"
                descricao="Nesta escola da rede privada com valores cristãos do Paraná,
                    desenvolvi tanto o design UI/UX do site institucional quanto escrevi o código do mesmo."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/show-gospel.png') }}"
                dataTrabalho="2019"
                nome="Show Gospel"
                tipo="Blog em Laravel"
                descricao="Há mais de 20 anos fornecendo conteúdo para o público gospel,
                    a revista Show Gospel em 2019 teve um blog no qual participei do desenvolvimento."
            />
        </ul>
    </div>
</section>