<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17846849821"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-17846849821');
    </script>
    <!-- Meta tags principais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="UnderdogBytes (Bea)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - UnderdogBytes</title>
    <meta name="description"
      content="Portfólio de UnderdogBytes, engenheira de software, programadora e artista visual. Explore projetos de desenvolvimento, UI design e arte.">
    <meta name="keywords"
      content="engenheira de software, programadora, artista visual, ilustradora, desenvolvimento web, portfólio, projetos de software, UI design, arte digital, arte tradicional">

    <!-- Meta tags para motores de busca -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Space+Grotesk:wght@400;600&display=swap"
      rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body>
    <x-header.v1 />
    <main>
      @yield('content')
    </main>
    <x-footer.v1 />
    <script src="{{ asset('js/index.js') }}"></script>
  </body>

</html>
