<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Профиль</h1>

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Имя:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Выйти</button>
    </form>
</body>
</html>
