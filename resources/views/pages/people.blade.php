@extends('layouts.app')

@section('title', 'Pessoas | Projetos Jr. Consultoria')

@section('content')
<div class="banner banner-small banner-people">
    <div class="banner-box banner-text">
        <h1 class="title">{{$title}}</h1>
    </div>
</div>
<section class="flex-section">
        <div class="flex-section-box">
        <h5>AVALIAÇÃO DE DESEMPENHO</h5>
        <p>
        A avaliação de desempenho pode ser definida como a
        identificação e mensuração das ações que os colaboradores de
        uma organização realizaram durante determinado período.
        A avaliação de desempenho tem como objetivo diagnosticar e
        analisar o desempenho individual e grupal dos funcionários,
        promovendo o crescimento pessoal e profissional, bem
        como melhor desempenho.</p>
    </div>
    <div class="flex-section-box">
        <h5>RECRUTAMENTO E SELEÇÃO</h5>
        <p>
            Recrutar é a arte de selecionar através de um conjunto de
            técnicas, candidatos potencialmente qualificados para ocuparem
            determinados cargos nas organizações. O interesse de todo
            recrutamento, é encontrar nas pessoas um perfil alinhado a
            missão, visão e valores da empresa, visando através da busca de
            pessoas capazes para fazerem parte dos projetos e objetivos
            empresariais das diversas organizações.</p>
    </div>
        <div class="flex-section-box">
        <h5>PESQUISA DE CLIMA ORGANIZACIONAL</h5>
        <p>
        A pesquisa de clima organizacional cumpre um papel
        importante para o sucesso da organização. É uma das principais
        e mais importantes ferramentas que um Gestor pode utilizar para
        avaliar, afinal, é a partir dela que a empresa realiza uma
        análise do engajamento e satisfação dos funcionários – o que é
        fundamental para que o empreendimento possa crescer.</p>
</section>
@endsection