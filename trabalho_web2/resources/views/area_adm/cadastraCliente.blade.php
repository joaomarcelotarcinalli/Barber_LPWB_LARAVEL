@extends('area_adm.dashboard')
@section('admin_template')
    <link rel= "icon" href = "img/Imagens/logo2Novo.png">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Novo Cliente</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro de novo cliente</li>
        </ol>
        <div class="main">

            <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="{{route('clieCadDashboard')}}" method="POST">
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
                    <br>
                    <button type="submit" style= "border-radius: 15px; padding: 7px">
                        <span class="button__text">Cadastrar</span>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    </div>
                </div>
            </div>
        @endsection
