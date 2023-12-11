<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <a href="{{route('curso.index')}}">
        <button type="button"><b>Listar</b></button>
    </a><br>
    
    <H2>Cadastra curso</H2>

    
    <form action="{{ route('curso.store')}}" method="POST">
        @csrf 
        @method('POST')
        
    <label for="">Nome:</label>
    <input type="text" name="name" id="name" placeholder="Nome do curso" value="{{ old('name')}}" required><br><br>
    <button type="submit">Cadastrar</button>

    </form>
</body>
</html>