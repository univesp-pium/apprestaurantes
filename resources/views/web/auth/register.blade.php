<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>

<body>

    <form action="{{ route('auth.register_action') }}" method="post">

        @csrf

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="password_confirmation">Repita a senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <button type="submit">Registrar</button>

    </form>

</body>

</html>
