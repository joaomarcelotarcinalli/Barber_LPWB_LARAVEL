@extends('area_adm.dashboard')
@section('admin_template')
    <link rel= "icon" href = "img/Imagens/logo2Novo.png">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Novo barbeiro</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Cadastro de novo barbeiro</li>
        </ol>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form action= "{{ route('novoBarbeiro') }}" method= "POST">
                    @csrf
                    <label for="chk" aria-hidden="true">Retrovisor</label>
                    <input style= "border-radius: 13px" type="text" name="usuario" placeholder="Nome" required="">
                    <input style= "border-radius: 13px" type="password" name="especialidade" placeholder="Especialidade"
                        required="">
                    <button>SIGN</button>
                </form>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    </div>
                </div>
            </div>
        @endsection
