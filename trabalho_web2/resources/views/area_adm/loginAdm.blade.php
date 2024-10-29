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
                <form class="login" action="{{ route('loginAdm') }}" method="POST">
                    @csrf
                    <h1 style ="font-size: 35px; margin-top: -20%">Administrador</h1>
                    <br>
                    <br>
                    <br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="login__field">
                        <i class="login__icon fas fa-envelope"></i>
                        <input type="text" name="email" class="login__input" placeholder="e-mail" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" class="login__input" placeholder="senha" required>
                    </div>
                    <br>
                    <a style = "text-decoration: none; color: black"href = "{{route('login')}}">Não é administrador?</a>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Login</span>
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
