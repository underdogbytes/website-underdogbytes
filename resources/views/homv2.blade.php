@extends('layouts.app')
@section('title', 'Página Inicial')

@section('content')
<x-hero title="Sites profissionais e sistemas completos para negócios."
  subtitle="Criamos experiências digitais modernas e acessíveis para fazer sua empresa crescer." />

@php
$services = [
[
'title' => 'Criação de sites profissionais para pequenos negócios.',
'text' => 'Desenvolvimento de sites rápidos, responsivos e seguros, com SEO otimizado para atrair clientes e fortalecer
sua presença online.',
'link' => 'mailto:underdogbytes@gmail.com?subject=Sites'
],
[
'title' => 'Sistemas completos para gestão do seu negócio',
'text' => 'Desenvolvimento de plataformas sob medida para automatizar processos, aumentar a eficiência e centralizar a
gestão do seu negócio. Suporte incluso.',
'link' => 'mailto:underdogbytes@gmail.com?subject=Sistemas'
],
];
@endphp
<x-services title="O que fazemos" subtitle="Soluções digitais rápidas e modernas." :items="$services" />
@endsection