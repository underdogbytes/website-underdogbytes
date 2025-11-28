<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Underdog Bytes — Desenvolvimento de Sites e Plataformas</title>
    <style>
      :root {
        --bg-dark: #0f0f17;
        --bg-light: #f4f2e9;
        --text-dark: #1a1a1a;
        --text-light: #f4f2e9;
        --primary: #2b4c7e;
        --accent: #d4b46a;
        --gray: #cfcab8;
        --font-serif: "Libre Baskerville", serif;
        --font-sans: "Inter", sans-serif;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background: var(--bg-light);
        color: var(--text-dark);
        font-family: var(--font-sans);
        line-height: 1.6;
      }

      header {
        background: var(--bg-dark);
        padding: 1.2rem 2rem;
        color: var(--text-light);
        font-family: var(--font-serif);
        font-size: 1.2rem;
        letter-spacing: 1px;
        border-bottom: 4px solid var(--accent);
      }

      .hero {
        background: url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 7rem 2rem;
        text-align: center;
        color: var(--text-light);
        position: relative;
      }

      .hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
      }

      .hero h1,
      .hero p {
        position: relative;
        z-index: 2;
        font-family: var(--font-serif);
      }

      .hero h1 {
        font-size: 3rem;
        max-width: 800px;
        margin: auto;
        letter-spacing: 1px;
      }

      .hero p {
        margin-top: 1rem;
        font-size: 1.2rem;
        opacity: 0.9;
      }

      section {
        padding: 4rem 2rem;
        max-width: 1100px;
        margin: auto;
      }

      h2 {
        text-align: center;
        font-family: var(--font-serif);
        font-size: 2rem;
        margin-bottom: 2rem;
        letter-spacing: 1px;
      }

      .cards {
        display: grid;
        gap: 2rem;
      }

      @media(min-width:768px) {
        .cards {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      .card {
        background: #fffaf0;
        border: 1px solid var(--gray);
        padding: 2rem;
        border-radius: 4px;
        font-family: var(--font-serif);
        box-shadow: 0 0 0 3px var(--accent) inset;
        transition: 0.3s;
      }

      .card:hover {
        transform: translateY(-4px);
        background: #fff7e3;
      }

      .btn {
        display: inline-block;
        margin-top: 1rem;
        padding: 0.6rem 1.2rem;
        background: var(--primary);
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-family: var(--font-sans);
        font-weight: 500;
        border: 2px solid var(--accent);
        transition: 0.2s;
      }

      .btn:hover {
        background: #1c3254;
      }

      .portfolio img {
        width: 100%;
        border: 3px solid var(--accent);
        border-radius: 4px;
        filter: sepia(35%) contrast(1.1);
      }

      footer {
        background: var(--bg-dark);
        color: var(--text-light);
        padding: 2rem;
        text-align: center;
        font-family: var(--font-serif);
        letter-spacing: 1px;
        border-top: 4px solid var(--accent);
      }
    </style>
  </head>

  <body>

    <header>
      <strong>Underdog Bytes</strong>
    </header>

    <section class="hero">
      <h1>Sites profissionais e plataformas completas para negócios</h1>
      <p>Soluções digitais modernas, rápidas e acessíveis para fortalecer sua presença online.</p>
    </section>

    <section>
      <h2>O que fazemos</h2>
      <div class="cards">
        <div class="card">
          <h3>Websites profissionais</h3>
          <p>Sites modernos, rápidos e seguros para reforçar a autoridade do seu negócio.</p>
          <a class="btn" href="#contact">Solicitar proposta</a>
        </div>
        <div class="card">
          <h3>E-commerces completos</h3>
          <p>Lojas online independentes, escaláveis e sem depender de plataformas pagas.</p>
          <a class="btn" href="#contact">Solicitar proposta</a>
        </div>
        <div class="card">
          <h3>Plataformas sob medida</h3>
          <p>Sistemas robustos feitos sob medida para otimizar e centralizar seu negócio.</p>
          <a class="btn" href="#contact">Solicitar proposta</a>
        </div>
      </div>
    </section>

    <section>
      <h2>Portfólio</h2>
      <div class="portfolio">
        <div><img src="https://via.placeholder.com/400x250?text=Portf%C3%B3lio+1"></div>
        <div><img src="https://via.placeholder.com/400x250?text=Portf%C3%B3lio+2"></div>
        <div><img src="https://via.placeholder.com/400x250?text=Portf%C3%B3lio+3"></div>
      </div>
    </section>

    <section id="contact">
      <h2>Fale conosco</h2>
      <p style="text-align:center; max-width:600px; margin:auto;">
        Entre em contato para solicitar um orçamento ou tirar dúvidas:
        <br><br>
        <strong>contato@underdogbytes.com</strong>
      </p>
    </section>

    <footer>
      Underdog Bytes • CNPJ 55.469.973/0001-66
    </footer>

  </body>

</html>