@extends('area_adm.dashboard')

@section('admin_template')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Clientes cadastrado</h1>
        <ol class="breadcrumb mb-4">

        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de clientes
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Plano</th>
                        <th>Excluir</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $linha)
                            <tr>
                                <td>{{ $linha->id }}</td>
                                <td>{{ $linha->name }}</td>
                                <td>{{ $linha->email }}</td>
                                <td>
                                    <a href='{{ route('ClienteExcluir', ['id' => $linha->id]) }}' class='btn btn-danger'>
                                        <li class='fa fa-trash'></li>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>

           
        @endsection
