<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/loginAdm.css">
    <title>Login ADM</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="/cad/cli" method="POST">
                <h1 style = "font-family: arial; margin-top: -20%; font-size: 38px">Cadastro</h1>
                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                    @csrf
                    <br>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="name" class="login__input" placeholder="usuário" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-envelope"></i>
                        <input type="text" name="email" class="login__input" placeholder="email" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" class="login__input" placeholder="senha" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password_confirmation" class="login__input" placeholder="confirme a senha" required>
                    </div>
                    <a style = "text-decoration: none; color: black;"href = "/login">Já possui conta?</a>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Cadastrar</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>
