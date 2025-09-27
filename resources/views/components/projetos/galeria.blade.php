<section id="projetos">
    <div class="inner">
        <x-utils.titulo
            titulo="Projetos para Clientes"
        />

        <ul class="galeria">
            <x-projetos.item
                imgSrc="{{ asset('imagens/olachico.png') }}"
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
                imgSrc="{{ asset('imagens/sorla-db.png') }}"
                nome="Sorla DB"
                dataTrabalho="2024"
                tipo="Landing Page"
                descricao="Essa biblioteca JavaScript, batizada em homenagem à mãe do criador,
                    é um projeto openSource. Fui responsável pelo design da landing page,
                    criando uma experiência visual atraente e funcional."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/dislexia.png') }}"
                nome="EduEdu Alfabetização"
                dataTrabalho="2024"
                tipo="Aplicativo"
                descricao="O aplicativo da EduEdu, desenvolvido em parceria com o Instituto ABCD,
                    foi criado para apoiar crianças com dificuldades de leitura e escrita.
                    Na versão 2 do projeto, atuei ativamente enquanto prestava meus serviços à empresa Lyncas,
                    contribuindo para aprimorar a experiência e a acessibilidade do app,
                    além de manter um código limpo e estruturado."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/cej.png') }}"
                dataTrabalho="2024"
                nome="Colégio Evangélico Jaraguá"
                tipo="Portal de gerenciamento"
                descricao="Desenvolvi um novo portal de gerenciamento para o Colégio Evangélico Jaraguá,
                    focado em melhorar a experiência de alunos e funcionários.
                    O projeto, realizado durante meu tempo na Lyncas,
                    teve como objetivo otimizar o acesso a informações e facilitar a gestão escolar."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/colecoes-fauna-do-brasil.png') }}"
                nome="Coleções Fauna do Brasil"
                dataTrabalho="2022"
                tipo="E-commerce OpenCart"
                linkExterno="https://faunadobrasil.com.br"
                descricao="Coleções Fauna do Brasil é uma loja de empreendedorismo sustentável de Curitiba
                    que traz bichinhos de pelúcia inspirados na fauna brasileira.
                    Além de encantar, a marca conscientiza seus clientes sobre a
                    importância da preservação e alerta sobre espécies ameaçadas.
                    Foi um grande prazer contribuir para este projeto!"
                />

                <x-projetos.item
                    imgSrc="{{ asset('imagens/mais-futuro.png') }}"
                    nome="Aplicativo Mais Futuro"
                    dataTrabalho="2022-2024"
                    tipo="Aplicativo PWA em VueJS"
                    descricao="Dediquei dois anos, atuei em tempo integral no desenvolvimento do <a href='https://www.maisfuturo.com.br' target='_blank' rel='noopener noreferrer'>aplicativo PWA da Mais Futuro</a>,
                        uma empresa de previdência privada do Paraná.
                        Trabalhei tanto no design UI/UX quanto na implementação em Vue.js,
                        garantindo uma experiência intuitiva e eficiente para os usuários."
                />

            <x-projetos.item
                imgSrc="{{ asset('imagens/tempestade-criativa.png') }}"
                dataTrabalho="2022"
                nome="Tempestade Criativa"
                tipo="Landing Page em Laravel"
                descricao="Fui responsável pelo desenvolvimento da landing page desta agência curitibana,
                    criando uma página eficiente, com navegação fluída e visualmente atraente"
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/escola-renovacao.png') }}"
                dataTrabalho="2022"
                nome="Escola Renovação"
                tipo="Website em Laravel"
                descricao="Nesta escola da rede privada cristã do Paraná,
                    fui responsável tanto pelo design UI/UX quanto pelo desenvolvimento do código do site institucional,
                    criando uma plataforma funcional e alinhada aos valores da instituição."
            />

            <x-projetos.item
                imgSrc="{{ asset('imagens/show-gospel.png') }}"
                dataTrabalho="2019"
                nome="Show Gospel"
                tipo="Blog em Laravel"
                descricao="Com mais de 20 anos de história fornecendo conteúdo para o público gospel,
                    a revista Show Gospel lançou, em 2019, um blog no qual participei ativamente do desenvolvimento."
            />
        </ul>
    </div>
</section>