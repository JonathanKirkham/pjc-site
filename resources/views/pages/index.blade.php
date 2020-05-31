@extends('layouts.app')

@section('title', 'Projetos Jr. Consultoria | Recife | Pernambuco')

@section('content')

<div class="banner banner-large banner-main">
    <div class="banner-text">
        <h1>Proporcionar Soluções</h1>
        <h2>É o Nosso Projeto </h2>
        <h5>Descubra como uma empresa de jovens<h5>
        <h5>pode transformar sua empresa</h5>
        <a class="bt" href="#" role="button">Saiba Mais</a>
    </div>
    <a onclick="scrollDown()" class="scroll-down-btn bounce">
        <img src=../images/arrowdown.png>
    </a>
    </div>
    <div id="particles-js">
    </div>
    <section class="section-one">
        <img class="image" src="../images/logo2.webp">
        <div class="text">
            <h1>Sobre</h1>
            <p>A Projetos Jr. Consultoria, é uma empresa Júnior multidisciplinar formada por alunos graduandos dos cursos de Administração,
            Ciências Contábeis, Logística, Gestão Financeira, Gestão Comercial, Recursos Humanos e Psicologia,  da Faculdade FAFIRE, que
            desenvolvem serviços de assessoria e consultoria empresarial especializada que se adequassem à realidade econômica de micro e
            pequenas empresas situadas na região metropolitana do Recife. Proporcionando soluções através de serviços de consultoria nas áreas
            de Gestão de Pessoas, Marketing e Financeiro.</p>
            <a class="bt" type="button onclick=parent.open("{{route('contact')}}")>Marque sua Reunião Conosco</a>
        </div>
</section>
    <section class="section-two">
        <img class="image" src="../images/gem.webp">
        <div class="text">
            <h1>Clientes</h1>
            <p>Contar com a Projetos Jr. no Recrutamento e Seleção  do nosso time foi uma escolha acertada.
            O Compromentimento e a transparência da equipe de consultores deixou a seleção com
            a nossa cara e fez com que fosse conduzido com excelência.
            Trabalhamos em equipe, cada um desemprenho seu papel  da melhor forma, e chegamos ao final dentro do cronograma planejado.
            Passados quase seis meses de seleção, temos a certeza da melhor escolha, a equipe selecionada com apoio da Projetos Jr.
            vem desenvolvendo bem o seu papel, engajada  e alinhada  com os objetivos da empresa"</p>

            <h5>LUIZ FELIPE - CEO
            DATACERT - CLIENTE DA PROJETOS JR. CONSULTORIA</h5>
            <a class="bt" type="button onclick=parent.open("{{route('contact')}}")>Marque sua Reunião Conosco</a>
        </div>
    </section>
    <section class="section-three">
        <img class="image" src="../images/staff.webp">
        <div class="text">
            <h1>Midia</h1>
            <p>Empresas Júnior preparam estudantes da graduação para o mercado de trabalho
            Organização administrada por graduandos faz o aluno aplicar na prática o que aprende em sala de aula.</p>
            <a class="bt" type="button" onclick=parent.open('https://g1.globo.com/especial-publicitario/educa-mais-brasil/noticia/empresas-junior-preparam-estudantes-da-graduacao-para-o-mercado-de-trabalho.ghtml')>Veja Mais</a>
        </div>
    </section>
    @include('partials.partners')
    @endsection