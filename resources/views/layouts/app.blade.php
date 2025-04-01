<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Meta tags principais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="UnderdogBytes (Bea)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - UnderdogBytes</title>
    <meta
      name="description"
      content="Portfólio de UnderdogBytes, engenheira de software, programadora e artista visual. Explore projetos de desenvolvimento, UI design e arte.">
    <meta
      name="keywords"
      content="engenheira de software, programadora, artista visual, ilustradora, desenvolvimento web, portfólio, projetos de software, UI design, arte digital, arte tradicional">

    <!-- Meta tags para motores de busca -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  </head>

  <body>
    <x-utils.navbar />
    <main>
      @yield('content')
    </main>
    <x-utils.footer />
    <script src="{{ asset('js/index.js') }}"></script>
  </body>
</html>