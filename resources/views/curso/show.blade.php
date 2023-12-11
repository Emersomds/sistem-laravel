<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <H2>Detalhes dos cursos</H2>
    <!-- Rotas ou menu do sistema-->
    <a href="{{route('curso.index')}}">
        <button type="button">Listar</button>
    </a><br>
    <a href="{{ route('curso.edit', ['curso'=> $curso->id])}}">
        <button type="button">Editar</button>
    </a><br>
    <form method="POST" action="{{route('curso.destroy', ['curso'=> $curso->id])}}">
        @csrf 
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja apagar este registro?')">Apagar</button>
    </form>

    <!-- Retorno da mensagem de cadatrado com sucesso -->
    @if(session('success'))
        <p style="color: #082;">
            {{ session('success') }}
        </p>
    @endif
    <br>
    ID: {{$curso->id}}<br>
    Nome: {{$curso->name}}<br>
    Cadastrado: {{ \Carbon\Carbon::parse($curso->created_at)->tz('America/Sao_Paulo')
    ->format('d/m/y - H:i:s') }}<br>
    Editado: {{ \Carbon\Carbon::parse($curso->updated_at)->tz('America/Sao_Paulo')
    ->format('d/m/y - H:i:s')}}<br>

</body>
</html>
