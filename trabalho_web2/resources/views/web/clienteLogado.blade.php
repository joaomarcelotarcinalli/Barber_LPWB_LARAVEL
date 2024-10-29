<!DOCTYPE html>
<html>

<head>
    <link rel= "icon" href = "img/Imagens/logo2Novo.png">
    <title>Barber Shop Bootstrap Template Grafreez</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<link rel="stylesheet" type="text/css" href="css/loaders.css" />
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

<body>

    <!-- Page loading animation -->
    <div class="loader loader-bg">
        <div class="loader-inner ball-pulse">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Top navigation -->
    <nav class="navbar navbar-expand-md fixed-top top-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src= "img/Imagens/logo2Novo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto text-sm-center text-md-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Barbeiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Contato</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto search-box">
            </ul>
        </div>
    </nav>

    <!-- Intro Three -->
    <section id="home" class="intro intro-bg bg-overlay parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
                    <div class="intro-caption mt-5">
                        <h1 style= "color: white; width: 800px; font-size: arial;">Seja bem-vindo ao clube!</h1>
                        <p class="text-white mb-4">Retrovisor BarberShop</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Info block 1 -->
    <section id="services" class="info-section text-white bg-right bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="head-box">
                        <h2 class="font-abril ">Privilégios oferecidos !</h2>
                    </div>
                    <div class="three-panel-block mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/scissors.png"
                                            class="img-fluid"></i>
                                    <h3 class="text-primary">Corte de Cabelo</h3>
                                    <p>Never in all their history have men been able truly to conceive of the world as
                                        one a single sphere</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/razor-1.png"
                                            class="img-fluid"></i>
                                    <h3 class="text-primary">Corte de cabelo com navalha</h3>
                                    <p>Never in all their history have men been able truly to conceive of the world as
                                        one a single sphere</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block mb-5">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/brush.png"
                                            class="img-fluid"></i>
                                    <h3 class="text-primary">Corte de Barba</h3>
                                    <p>Never in all their history have men been able truly to conceive of the world as
                                        one a single sphere</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="service-block">
                                    <i class="icon-box mb-3 float-left w-100"><img src="img/icons/hair-clip.png"
                                            class="img-fluid"></i>
                                    <h3 class="text-primary">Corte de Barba com Navalha</h3>
                                    <p>Never in all their history have men been able truly to conceive of the world as
                                        one a single sphere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Info block 2 -->
    <section id="price" class="info-section sec-bg-03 bg-overlay">
        <div class="container text-white">
            <div class="head-box text-center mb-5">
                <h2 class="font-abril">Agende um horário</h2>
                <h5 class="arial">Selecione um serviço e marque seu horário</h5>
            </div>
            <div class="three-panel-block my-4">
                <a style ="color: white; text-decoration: none;" href="{{route('registrarHora')}}">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
                            <div class="service-block-bg text-center p-3">
                                <div class="price-count font-abril">Corte de cabelo</div>
                                <p class="px-4">Com o profissional Cleiton</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 pr-md-5 mb-4">
                            <div class="service-block-bg text-center p-3">
                                <div class="price-count font-abril">Corte de barba</div>
                                <p class="px-4">Com o profissional Júnior</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
                            <div class="service-block-bg text-center p-3">
                                <div class="price-count font-abril">Corte de cabelo e barba</div>
                                <p class="px-4">Com o profissional Pedro</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 pr-md-5">
                            <div class="service-block-bg text-center p-3">
                                <div class="price-count font-abril">Corte de cabelo tribal</div>
                                <p class="px-4">Com o profissional Cleiton</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </a>
    </section>

    <!-- footer Block -->
    <div class="copy-footer bg-primary py-2">
        <div class="container text-center text-light">
            &copy; <a href="" target="_blank">Retrovisor</a> <span id="year"></span>. Copyright. Criado
            por J
            <br>
        </div>

    </div>



    <!-- Javascript Files  -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script async deffer type="text/javascript"
        src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
    <script src="js/gmap-custom.js"></script>
    <script src="js/core.js"></script>
</body>

</html>
