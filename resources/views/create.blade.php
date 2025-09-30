<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="{{ route('index')}}">Lista</a>
<body>
    <form action="{{ route('store')}}" method="post">
         @csrf
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">
        <button>Cadastrar</button>
    </form>
</body>
</html>