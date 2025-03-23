<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <form action="{{ route('auth.login_action') }}" method="post">

        @csrf

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Entrar</button>

    </form>

</body>

</html>
