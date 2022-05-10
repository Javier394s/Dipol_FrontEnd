<!DOCTYPE html>
<html lang="en">
<head>

<title>Multipart</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

<a class="navbar-brand" href="{{ url("/") }}"><img src="{{ asset("/images/log-azul-pnggg2.png") }}" class="img-fluid" alt="Logo" width="115"></a>

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
<a href="{{ url("/#promociones") }}" class="nav-link smoothScroll">DESTACADOS</a>
<ul>
<li class="dropdown-item"><a class="item-text" href="{{ url("#promociones") }}">OFERTAS</a></li>                            
</ul>
</li>

<li class="nav-item dropdown">
<a href="{{ url("/#contact") }}" class="nav-link smoothScroll">CONTACTO</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<ul>
<li class="dropdown-item"><a class="item-text" href="{{ url("/#contact") }}">SANTA ANA</a></li>
<li class="dropdown-item"><a class="item-text" href="{{ url("/#contacttitle") }}">SAN SALVADOR</a></li>
</ul>
</div>
</li>

<li class="nav-item" style="list-style:none">
<a href="{{ url("/l#") }}" class="nav-link smoothScroll">ANUNCIOS</a>
</li>
</ul>

<ul class="social-icon ml-lg-3">
<li><a href="https://www.facebook.com/profile.php?id=100072798421030" class="fa fa-facebook" target="_blank"></a></li>

<li><a href="https://api.whatsapp.com/send?phone=+503 7783 9827" class="fa fa-whatsapp" target="_blank"></a></li>

</ul>
</div>

</div>
</nav>

<section>

</section>
<!-- Toyota -->
<!--Acá empieza-->

<section class="class-section" id="promociones">
<div class="container">
<div class="row">

<div class="col-lg-12 col-12 text-center mb-5" style="margin-top:100px;">
<h2 data-aos="fade-up" data-aos-delay="200" >Productos</h2>
</div>

@foreach($data as $product)

<div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                <img src="{{ asset("/images/class/bumper_frontal.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">{{$product['title']}}</h3>                                    

                                        <p class="mt-3">{{$product['model']}}</p>
                                        <p class="mt-3">Años: {{$product['years']}}</p>
                                        <p class="mt-3">
                                            <i class="fa fa-envelope-o mr-1"></i>
                                            <a href="#" target="_blank">Ventas@multipartsv.com</a>
                                        </p>
                                        <p class="mt-3">
                                            <i class="fa fa-phone mr-1"></i> 
                                            <a href="#" target="_blank">+503 2440 3772</a>
                                        </p>
                                        <p class="mt-3">
                                            <i class="fa fa-whatsapp mr-1"></i> 
                                            <a href="#" target="_blank">+503 7783 9827</a>
                                        </p>
                                    </div>
                                </div>
</div>

@endforeach

</section>

<!--ACÁ TERMMINA-->

<!-- FOOTER -->
<footer class="site-footer">
<div class="container">
<div class="row">

<div class="ml-auto col-lg-4 col-md-5">
<p class="copyright-text">Copyright &copy; 2022
</div>

<div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
<p class="mr-4">
<i class="fa fa-envelope-o mr-1"></i>
<a href="{{ url("#") }}">ventas@multipartsv.com</a>
</p>

<p><i class="fa fa-phone mr-1"></i> 2440 3772</p>
</div>
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