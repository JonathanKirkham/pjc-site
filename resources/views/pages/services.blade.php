@extends('layouts.app')

@section('title', 'Serviços | Projetos Jr. Consultoria')

@section('content')
<div class="banner banner-small banner-serv">
    <div class="banner-box banner-text">
        <h1>Serviços</h1>
    </div>
</div>
<section class="flex-service-section">
<div class="flex-section-box">
    <img class="image" alt="Financeira" src="/images/people-service.jpg">
    <h2>Financeira</h2>
    <ol>
        Em Gestão Financeira, oferecemos serviços de:
        <li>- Redução de Gastos</li>
        <li>- Planejamento Financeiro</li>
        <li>- Estruturação Financeira</li>
    </ol>
    <a class="bt" href="{{route('finance')}}">Vaja nossos Financeira</a>
</div>
<div class="flex-section-box">
    <img class="image" alt="Marketing" src="/images/marketing-service.jpg">
    <h2>Marketing</h2>
    <ol>
        Em Marketing oferecemos serviços de:
        <li>- Pesquisa de Mercado</li>
        <li>- Análise Comercial</li>
        <li>- Estratégia de Comunicação</li>
        <li>- Análise Concorrencial</li>
        <li> - Plano de Marketing</li>
        <li>- Pesquisa de Marketing e outros.</li>
    </ol>
    <a class="bt">Vaja nossos Marketing</a>
</div>
<div class="flex-section-box">
    <img class="image" alt="Pessoas" src="/images/people-service.jpg">
    <h2>Pessoas</h2>
    <ol>
        Em Gestão de Pessoas, oferecemos serviços de:
        <li>- Avaliação de Desempenho</li>
        <li>- Pesquisa de Clima Organizacional</li>
        <li>- Recrutamento e Seleção</li>
    </ol>
    <a class="bt">Vaja nossos Pessoas</a>
</div>
<div class="flex-section-box">
    <img class="image" alt="Processos" src="/images/marketing-service.jpg">
    <h2>Processos</h2>
    <ol>Fusce at bibendum eros. Suspendisse potenti. Praesent.
        <li>- Vivamus aliquet, risus.</li>
        <li>- Mauris turpis ligula, tristique.</li>
        <li>- Curabitur egestas sagittis gravida.</li>
    </ol>
    <a class="bt">Vaja nossos Processos</a>
</div>
</section>
@endsection