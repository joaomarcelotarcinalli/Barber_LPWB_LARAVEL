<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel= "icon" href = "img/Imagens/logo2Novo.png">
    <link href="/css/styles.css" rel="stylesheet" />
    <title>Área Adm - Retrovisor</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <img src = "img/Imagens/logo2Novo.png"
            style = "height: 60px; border-radius: 8px; margin-top : 23px; margin-left: 32px;"><img />
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('home') }}">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">BARBEARIA</div>
                        <a class="nav-link collapsed" href="{{ route('novoB') }}" aria-expanded="false"
                            aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                            Cadastrar Barbeiros
                        </a>
                        <a class="nav-link collapsed" href="{{ route('clienteN') }}" aria-expanded="false"
                            aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                            Cadastrar Clientes
                        </a>
                        <a class="nav-link collapsed" href="{{ route('consultaBarbeiro') }}" aria-expanded="false"
                            aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                            Consultar Barbeiros
                        </a>
                        <a class="nav-link collapsed" href="{{ route('consultaCliente') }}" aria-expanded="false"
                            aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                            Consultar Clientes
                        </a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="sb-sidenav-footer">
                            <div class="small">Configurações</div>
                            Barbearia Retrovisor
                        </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('admin_template')
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Barbearia Retrovisor</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>
</body>

</html>
