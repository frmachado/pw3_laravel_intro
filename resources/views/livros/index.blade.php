<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Cadastro de Livros</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf

        <div>
            <label>Título</label>
            <input
                type="text"
                name="titulo"
                value="{{ old('titulo') }}"
            >
        </div>

        <br>

        <div>
            <label>Autor</label>
            <input
                type="text"
                name="autor"
                value="{{ old('autor') }}"
            >
        </div>

        <br>

        <div>
            <label>Ano de publicação</label>
            <input
                type="number"
                name="ano_publicacao"
                value="{{ old('ano_publicacao') }}"
            >
        </div>

        <br>

        <button type="submit">
            Cadastrar
        </button>
    </form>

    <hr>

    <h2>Livros cadastrados</h2>

    @forelse($livros as $livro)
        <p>
            {{ $livro->titulo }} —
            {{ $livro->autor }} —
            {{ $livro->ano_publicacao }}
        </p>
    @empty
        <p>Nenhum livro cadastrado.</p>
    @endforelse

</body>
</html>