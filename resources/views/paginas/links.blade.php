@extends('layouts.app')
@section('title', 'Links')

@section('content')
<div class="wrap links">
  <div class="links__content">
    <h1>Links</h1>
    <ul class="links__list wrap">
      <x-links.item title="Deviant Art" link="https://www.deviantart.com/losingmybridge" description="Ver portfólio de ilustrações" />
      <x-links.item title="Patreon" link="https://www.patreon.com/c/btrz" description="Apoiar artes" />
      <x-links.item title="Website Underdog Bytes" link="https://www.underdogbytes.com/" description="Voltar para home" />
    </ul>
  </div>
</div>
@endsection