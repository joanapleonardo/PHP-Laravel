<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
</head>
<body>
    <h1>Olá, tá tudo?</h1>

    <ul>
        <a href="{{route('show_all_users')}}"><li>Todos os utilizadores</li></a>
    </ul>
    <ul>
        <a href="{{route('show_add_users')}}"><li>Aqui podes adicionar utilizadores</li></a>
    </ul>
</body>
<link rel="stylesheet" href="{}">
</html>