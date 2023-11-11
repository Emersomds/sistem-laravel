<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <a href="{{route('curso.show')}}">Visualizar</a><br>
    <a href="{{route('curso.create')}}">cadastrar</a><br>
    <a href="{{route('curso.edit')}}">Editar</a><br>
    <!-- <a href="{{route('curso.destroy')}}">Apagar</a><br> -->
    <H2>Listar os cursos</H2>
   

    @forelse ($cursos as $curso)
        {{ $curso->name }}<br>
        {{ \Carbon\Carbon::parse($curso->created_at)->tz('America/Sao_Paulo')
        ->format('d/m/y - H:i:s') }}<br>
        {{ \Carbon\Carbon::parse($curso->updated_at)->tz('America/Sao_Paulo')
        ->format('d/m/y - H:i:s')}}<br><hr>
    @empty
        <p style="color: #f00;">Nenhum curso encontrado</p>
    @endforelse

    {{$cursos->links()}}

</body>
</html>
