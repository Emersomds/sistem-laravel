<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>

    <a href="{{route('curso.create')}}">cadastrar</a><br>
   
    <H2>Listar os cursos</H2>
   

    @forelse ($cursos as $curso)
        ID: {{ $curso->id }}<br>
        Nome: {{ $curso->name }}<br>
        Cadastrado: {{ \Carbon\Carbon::parse($curso->created_at)->tz('America/Sao_Paulo')
        ->format('d/m/y - H:i:s') }}<br>
        Editado: {{ \Carbon\Carbon::parse($curso->updated_at)->tz('America/Sao_Paulo')
        ->format('d/m/y - H:i:s')}}<br>
        <a href="{{ route('curso.show', ['curso'=> $curso->id])}}">Visualizar</a><br>
        <a href="{{ route('curso.edit', ['curso'=> $curso->id])}}">Editar</a><br>
        <hr>
    @empty
        <p style="color: #f00;">Nenhum curso encontrado</p>
    @endforelse

    {{$cursos->links()}}

</body>
</html>
