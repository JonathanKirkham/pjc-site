<a href="{{route('index')}}">
    <img class="nav-logo" src="../images/logo.jpg" alt="Projetos Jr. Consultoria">
</a>

<nav id="nav" role="navigation">
    <ul>
        <li><a href="{{route('index')}}">Home</a></li>
        <li>
            <a class="dropdown" href="{{route('services')}}" aria-haspopup="true">Serviços</a>
            <ul>
                <li><a href="{{route('finance')}}">Finanças</a></li>
                <li><a href="{{route('marketing')}}">Marketing</a></li>
                <li><a href="{{route('process')}}">Processos</a></li>
                <li><a href="{{route('people')}}">Pessoas</a></li>
            </ul>
        </li>
        <li><a href="{{route('company')}}">Empresa</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="{{route('contact')}}">Contato</a></li>
    </ul>
</nav>