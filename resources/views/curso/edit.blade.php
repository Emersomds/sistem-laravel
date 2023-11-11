<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <H2>Editar curso</H2>

    <a href="{{route('curso.index')}}">Listar</a><br>
    <a href="{{route('curso.show', ['curso' => $curso->id])}}">Visualizar</a><br>
     {{--<a href="{{route('curso.destroy')}}">Apagar</a><br> --}}

    <form action="{{ route('curso.update', ['curso' => $curso->id]) }}" method="POST">
        @csrf 
        @method('PUT')

        <label for="">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome do curso" 
            value="{{ old('name', $curso->name)}}" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>

