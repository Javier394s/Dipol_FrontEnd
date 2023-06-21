<!DOCTYPE html>
<html lang="en">
<head>

<title>Dipol - Products</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="icon" href="{{ asset("/images/logodipol.png") }}">
<link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="{{ asset("/css/font-awesome.min.css") }}">
<link rel="stylesheet" href="{{ asset("/css/aos.css") }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset("/css/tooplate-gymso-style.css") }}">
<!--
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a class="navbar-brand" href="{{ url("/") }}"><img src="{{ asset("/images/logodipol.png") }}" class="img-fluid" alt="Logo" width="130"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a href="{{ url("/") }}" class="nav-link smoothScroll">INICIO</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url("/#about") }}" class="nav-link smoothScroll">ACERCA DE NOSOTROS</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url("/") }}" class="nav-link smoothScroll">PRODUCTOS</a>
                </li>

                <li class="nav-item dropdown" style="list-style:none">
                    <a href="{{ url("/#promociones") }}" class="nav-link smoothScroll" id="navbarDropdown1">OFERTAS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1"></div>
                </li>

                <li class="nav-item dropdown" style="list-style:none">
                    <a href="{{ url("/#contact") }}" class="nav-link smoothScroll" id="navbarDropdown">CONTACTO</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"></div>
                    <ul>
                        <li class="dropdown-item"><a class="item-text" href="{{ url("/#contact") }}">CASA MATRIZ</a></li>
                        <li class="dropdown-item"><a class="item-text" href="{{ url("/#contact2") }}">SANTA ANA</a></li>
                        <li class="dropdown-item"><a class="item-text" href="{{ url("/#contacttitle") }}">SAN SALVADOR</a></li>
                    </ul>
                </li>

                <li class="nav-item" style="list-style:none">
                    <a href="{{ url("/#anuncios") }}" class="nav-link smoothScroll">ANUNCIOS</a>
                </li>
            </ul>

            <ul class="social-icon ml-lg-3">
                <li><a href="https://www.facebook.com/profile.php?id=100048586663774" class="fa fa-facebook" target="_blank"></a></li>

                <li><a href="https://api.whatsapp.com/send?phone=50378376752" class="fa fa-whatsapp" target="_blank"></a></li>

            </ul>
        </div>

    </div>
</nav>

<section class="about section" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-5" style="margin-top:100px;">
                <h2 data-aos="fade-up" data-aos-delay="200" >Productos</h2>
            </div>

            @foreach($data as $product)

            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400" >
                <div class="class-thumb" id="products">
                    <img id="cardsProducts" src="{{ asset('uploads/products/'.$product->image) }}"  class="img-fluid" alt="product imagen">
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $data->links() }}
    </div>

</section>
<!--ACÁ TERMMINA-->

<!-- FOOTER -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">Copyright &copy; 2023</p>
                    <p>Dipol SA de CV</p>
                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-8 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="{{ url("#") }}">saladeventacasamatriz@dipolsa.com</a>
                    </p>
                    @foreach ($dato as $datos)
                    <p><i class="fa fa-phone mr-1"></i>
                    {{$datos->fijo_matriz}}</p>
                    @endforeach
                </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="{{ asset("/js/jquery.min.js") }}"></script>
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/js/aos.js") }}"></script>
<script src="{{ asset("/js/smoothscroll.js") }}"></script>
<script src="{{ asset("/js/custom.js") }}"></script>

</body>
</html>
