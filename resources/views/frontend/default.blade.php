<!DOCTYPE html>
<html lang="en">
<head>

    <title>Multipart - Home</title>

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

            <a class="navbar-brand" href=""><img src="{{ asset("/images/log-azul-pnggg2.png") }}" class="img-fluid" alt="Logo" width="115"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="{{ url("#home") }}" class="nav-link smoothScroll">INICIO</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url("#about") }}" class="nav-link smoothScroll">ACERCA DE NOSOTROS</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url("productos") }}" class="nav-link smoothScroll">PRODUCTOS</a>
                    </li>

                    <li class="nav-item dropdown" style="list-style:none">
                        <a href="{{ url("#promociones") }}" class="nav-link smoothScroll">OFERTAS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"></div>
                        <ul>
                            <li class="dropdown-item"><a class="item-text" href="{{ url("#destacados") }}">DESTACADOS</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown" style="list-style:none">
                        <a href="{{ url("#contact") }}" class="nav-link smoothScroll" id="navbarDropdown">CONTACTO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"></div>
                        <ul>
                            <li class="dropdown-item"><a class="item-text" href="{{ url("#contact") }}">SANTA ANA</a></li>
                            <li class="dropdown-item"><a class="item-text" href="{{ url("#contacttitle") }}">SAN SALVADOR</a></li>
                        </ul>
                    </li>

                    <li class="nav-item" style="list-style:none">
                        <a href="{{ url("#anuncios") }}" class="nav-link smoothScroll">ANUNCIOS</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://www.facebook.com/profile.php?id=100072798421030" class="fa fa-facebook" target="_blank"></a></li>

                    <li><a href="https://api.whatsapp.com/send?phone=+503 7783 9827" class="fa fa-whatsapp" target="_blank"></a></li>

                </ul>
            </div>

        </div>
    </nav>


    <!-- BANNER -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

            <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 mx-auto col-12">
                            <div class="hero-text mt-5 text-center">

                                    <h2 style="color: whitesmoke;" data-aos="fade-up" data-aos-delay="300">Venta de carrocería, luces y accesorios nuevos para vehículos</h6>

                                    <h1 style="margin-top: 120px;" class="text-white" data-aos="fade-up" data-aos-delay="300">Multipart is champion</h1>
                                    <h1 style="margin-top: 220px;" class="text-white" data-aos="fade-up" data-aos-delay="500">"CALIDAD Y RAPIDEZ A BUEN PRECIO"</h1>
                                </div>
                        </div>
                    </div>
            </div>
    </section>

    <section class="feature" id="feature">
        <div class="container">
            <h2 class="mb-4 text-white" id="txt"> Santa Ana</h2>
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Multipart</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Para mayor información</h6>

                    <p class="mr-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="{{ url("#contacto") }}" target="_blank">{{$config->correo_sa}}</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i>
                        <a href="{{ url("#contacto") }}" target="_blank">{{$config->fijo_sa}}</a>
                    </p>

                    <a href="{{ url("#contact") }}" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300">Más Información De Contacto</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horario De Trabajo</h2>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo : {{$config->horario_sa['domingo']}}</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$config->horario_sa['lunes-viernes']}}</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sábado</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$config->horario_sa['sabado']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container" style="margin-top: 80px">
            <h2 class="mb-4 text-white" id="txt"> San Salvador</h2>
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Multipart</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Para mayor información</h6>

                    <p class="mr-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="{{ url("#contacttitle") }}" target="_blank">{{$config->correo_ss}}</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i>
                        <a href="{{ url("#contacttitle") }}" target="_blank">{{$config->fijo_ss}}</a>
                    </p>

                    <a href="{{ url("#contacttitle") }}" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300">Más Información De Contacto</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horario De Trabajo</h2>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo : {{$config->horario_sa['domingo']}}</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$config->horario_sa['lunes-viernes']}}</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sábado</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$config->horario_sa['sabado']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- ACERDA DE NOSOTROS -->
    <section class="about section" id="about">
            <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Multipart S.A de C.V. Quienes somos</h2>

                                <p data-aos="fade-up" data-aos-delay="400">{{$config->intro}}</p>

                                <p data-aos="fade-up" data-aos-delay="500">{{$config->general}} <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100072798421030" target="_blank">Multipart SA de CV.</a></p>

                            </div>

                            <div class="ml-lg-auto col-lg-5 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700" style="margin-top: 40px;">

                                <p data-aos="fade-up" data-aos-delay="400">{{$config->info_website}}</p>

                                <p data-aos="fade-up" data-aos-delay="500">{{$config->ubicacion_sa}}
                                    <a rel="nofollow" href="https://www.google.com/maps/place/MultipartSV+S.A+de+C.V/@13.9823191,-89.5624378,17z/data=!4m5!3m4!1s0x8f62e90e8e1ffb41:0x9edb7b93129cb7e8!8m2!3d13.9833863!4d-89.5606675" target="_blank">
                                        (Ver en Google Maps) </a>
                                    {{$config->ubicacion_ss}}
                                    <a rel="nofollow" href="https://goo.gl/maps/hMUrNt9w4LCZSkJV9" target="_blank">
                                        (Ver en Google Maps) </a>
                                    {{$config->ubicaciones}}</p>
                            </div>
                    </div>
            </div>
    </section>


   <!-- PRODUCTOS EN OFERTAS -->
   <section class="class-section" id="promociones">
        <div class="container">
                <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">OFERTAS</h2>
                        </div>
                        @if ($destacados)
                            @foreach ($destacados as $item)
                                <div class="col-lg-4 col-md-6 col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                    <div class="class-thumb">
                                        <img src="{{ asset('uploads/destacados/'.$item->picture) }}" class="img-fluid" alt="Class">

                                        <div class="class-info">
                                            <h3 class="mb-1">{{ $item->name }}</h3>

                                           {{--REVISAR EL PORCENTAJE Y SI ESTA VACIO--}} <span class="class-price">-%{{ $item->discount }}</span>

                                            <p class="mt-3">{{ $item->company_model }}</p>
                                            <p class="mt-3">Año {{ $item->year_from }} - {{ $item->year_to }}</p>
                                            <p class="mt-3">
                                                <i class="fa fa-envelope-o mr-1"></i>
                                                <a href="#">Ventas@multipartsv.com</a>
                                            </p>
                                            <p class="mt-3">
                                                <i class="fa fa-phone mr-1"></i>
                                                <a href="#">+503 2440 3772</a>
                                            </p>
                                            <p class="mt-3">
                                                <i class="fa fa-whatsapp mr-1"></i>
                                                <a href="#">+503 7783 9827</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <div class="col-lg-12 col-12 text-center mb-4">
                            <h1>ACTUALMENTE NO HAY DESTACADOS!</h1>
                        </div>
                        @endif
                </div>
        </div>
        @include('frontend.ofertas.ofertas')
</section>

    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="mb-4" id="txt"> SANTA ANA</h2>
            <div class="row">
                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Información De Contacto.</h2>
                        <p class="mt-3">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">ventas@multipartsv.com</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-phone mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">+503 2440 3772</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-whatsapp mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">+503 7783 9827</a>
                        </p>

                        <img src="{{ asset("/images/multipart.jpg") }}" class="img-fluid" alt="Logo">

                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Donde nos puedes <span>encontrar</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Av. Maria Auxiliadora, Santa Ana. 4º Avenida Sur Entre 23 y 25 Calle Poniente</p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.7912090104467!2d-89.56172934210272!3d13.983443600274796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d9b89368ad4f71d!2zMTPCsDU5JzAwLjQiTiA4OcKwMzMnMzguMyJX!5e0!3m2!1ses!2ssv!4v1649202620494!5m2!1ses!2ssv" width="1920" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section id="contacttitle" class="contact section">
        <div class="container">
            <h2 class="mb-4" id="txt"> San Salvador</h2>
            <div class="row">
                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Donde nos puedes <span>encontrar</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>Colonia Layco 27 calle poniente y 21 avenida norte # 1214 San Salvador</p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.084164032726!2d-89.20340638516997!3d13.713352190372323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64b9f392ea708004!2zMTPCsDQyJzQ4LjEiTiA4OcKwMTInMDQuNCJX!5e0!3m2!1ses!2ssv!4v1658244945544!5m2!1ses!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="1920" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Información De Contacto.</h2>
                        <p class="mt-3">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">Ventasucursal@multipartsv.com</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-phone mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">+503 2281 0421</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-whatsapp mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">+503 6928 2674</a>
                        </p>

                        <img src="{{ asset("/images/sansalvador.jpg") }}" class="img-fluid" alt="Logo">

                    </div>

            </div>
        </div>
    </section>

    <!-- ANUNCIOS -->
    @include('frontend.slider.slider')



    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2022</p>
                        <p>Multipart SA de CV</p>
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
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset("/js/jquery.min.js") }}"></script>
    <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/js/aos.js") }}"></script>
    <script src="{{ asset("/js/smoothscroll.js") }}"></script>
    <script src="{{ asset("/js/custom.js") }}"></script>

</body>
