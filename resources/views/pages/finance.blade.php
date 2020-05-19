@extends('layouts.app')

@section('title', 'Finanças | Projetos Jr. Consultoria')

@section('content')
<div class="banner banner-small banner-finance">
    <div class=" banner-box banner-text">
        <h1 class="title">{{$title}}</h1>
    </div>
</div>
<section class="flex-section">
        <div class="flex-section-box">
        <h5>PLANEJAMENTO FINANCEIRO</h5>
        <p>
        Consiste em elaborar um mapeamento de custos, despesas e
        lucro visando a durabilidade a longo prazo de uma empresa se
        tornando assim uma base para tomada de decisões estratégicas
        e planejando como será o fluxo de caixa, o orçamento, o balanço
        patrimonial e também visa mensurar a evolução das finanças e
        com isso, atingir resultados adequados para a realidade da
        empresa, visando seu futuro.</p>
    </div>
    <div class="flex-section-box">
        <h5>ESTRUTURAÇÃO FINANCEIRA</h5>
        <p>
        A Estruturação Financeira é um serviço que tem por objetivo
        “Colocar as finanças de uma empresa nos eixos“. Quando uma
        empresa não tem mais rentabilidade ou está muito abaixo das
        concorrentes, ou a empresa se encontra em um desequilíbrio
        financeiro, a quantidade de saídas é maior do que a de entradas,
        ou quando não se sabe as fontes de despesas, custos e até
        mesmo lucro.</p>
    </div>
        <div class="flex-section-box">
        <h5>REDUÇÃO DE GASTOS</h5>
        <p>
        O serviço de redução de gastos é voltado totalmente para o
        corte de gastos e aumento da lucratividade da empresa.
        É importante frisar que na maioria dos casos se faz necessário
        avaliar tanto as contas da empresa quanto as contas pessoais,
        caso o cliente seja de pequeno/médio porte e mistura suas
        finanças.</p>
    </div>
</section>
@endsection