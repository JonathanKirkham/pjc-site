<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="form-wrap">
        <div class="form-title">
            <h2>Projetos Jr. Consultoria</h2>
        </div>
        @if(session()->has('mensagem'))
        <div class="alert" role="alert">
            <strong>Sucesso</strong> {{ session()->get('mensagem') }}
        </div>
        @endif
        <div class="form-group">
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Nome" title="Por favor, preencha este campo!">
            <span class="focus-input"></span>
            <div>{{ $errors->first('nome') }}</div>
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control" title="Por favor, preencha este campo!">
            <span class="focus-input"></span>
            <div>{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10"
            name="mensagem" placeholder="Mensagem">{{ old('mensagem') }}</textarea>
            <span class="focus-input"></span>
            <div>{{ $errors->first('mensagem') }}</div>
        </div>
        <button type="submit" class="bt">Enviar</button>
    </div>
</form>