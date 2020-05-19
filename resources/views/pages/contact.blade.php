@extends('layouts.app')

@section('title', 'Contato | Projetos Jr. Consultoria')

@section('content')
<body>
        <div class="banner banner-small banner-contact">
    <div class="banner-box banner-text">
    <h1 class="title">{{$title}}</h1>
    </div>
</div>
<section class="main-form-section">
    @include('partials.contact-form')
    <div class="contact-info">
        <p>Av. Conde da Boa Vista, 921</p>
        <p>Boa Vista, Recife - PE</p>
        <p>50060-002</p>
        <p>Tel: (81) 2122-3503</p>
        <p>contato@projetosconsultoria.com</p>
    </div>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15801.675294684566!2d-34.8891069!3d-8.0586899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42abf4657cec0445!2sProjetos%20Jr.%20Consultoria!5e0!3m2!1sen!2sde!4v1576969323424!5m2!1sen!2sde" ></iframe>
</section>
</body>
@endsection