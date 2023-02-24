<!DOCTYPE html>
<html lang="en">
<head>

    <title>Dipol - Home</title>

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

            <a class="navbar-brand" href=""><img src="{{ asset("/images/logodipol.png") }}" class="img-fluid" alt="Logo" width="115"></a>

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
                        <a href="{{ url("#promociones") }}" class="nav-link smoothScroll" id="navbarDropdown1">OFERTAS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"></div>
                    </li>

                    <li class="nav-item" style="list-style:none">
                        <a>⠀</a>
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
                    <li><a href="https://www.facebook.com/profile.php?id=100048586663774" class="fa fa-facebook" target="_blank"></a></li>

                    <li><a href="https://api.whatsapp.com/send?phone=50378376752" class="fa fa-whatsapp" target="_blank"></a></li>

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
                            <!--<div class="hero-text mt-5 text-center">

                                    <h2 style="color: whitesmoke;" data-aos="fade-up" data-aos-delay="300">Venta de carrocería, luces y accesorios nuevos para vehículos</h6>

                                    <h1 style="margin-top: 120px;" class="text-white" data-aos="fade-up" data-aos-delay="300">Multipart is champion</h1>
                                    <h1 style="margin-top: 220px;" class="text-white" data-aos="fade-up" data-aos-delay="500">"CALIDAD Y RAPIDEZ A BUEN PRECIO"</h1>
                            </div>-->
                        </div>
                    </div>
            </div>
    </section>

    <section class="feature" id="feature">
        @foreach ($dato as $datos)
        <div class="container">
            <h2 class="mb-4 text-white" id="txt"> Santa Ana</h2>
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Dipol</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Para mayor información</h6>

                    <p class="mr-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="{{ url("#contacto") }}" target="_blank">saladeventasucursal2@dipolsa.com</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i>
                        <a href="{{ url("#contacto") }}" target="_blank">{{$datos->fijo_sa}}</a>
                    </p>

                    <a href="{{ url("#contact") }}" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300">Más Información De Contacto</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horario De Trabajo</h2>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo : {{$datos->horario_sa_domingo}}</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$datos->horario_sa_semana}}</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sábado</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$datos->horario_sa_sabado}}</p>
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
                    <h2 class="mb-3 text-white" data-aos="fade-up">Dipol</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Para mayor información</h6>

                    <p class="mr-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="{{ url("#contacttitle") }}" target="_blank">saladeventasansalvador@dipolsa.com</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i>
                        <a href="{{ url("#contacttitle") }}" target="_blank">{{$datos->fijo_ss}}</a>
                    </p>

                    <a href="{{ url("#contacttitle") }}" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300">Más Información De Contacto</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horario De Trabajo</h2>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo : {{$datos->horario_ss_domingo}}</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$datos->horario_ss_semana}}</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sábado</strong>

                            <p data-aos="fade-up" data-aos-delay="800">{{$datos->horario_ss_sabado}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </section>


    <!-- ACERDA DE NOSOTROS -->
    <section class="about section" id="about">
        @foreach ($dato as $datos)
            <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Dipol S.A de C.V. Quienes somos</h2>

                                <p data-aos="fade-up" data-aos-delay="400">{{$datos->intro}}</p>

                                <p data-aos="fade-up" data-aos-delay="500">{{$datos->general}} <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100048586663774" target="_blank">Dipol SA de CV.</a></p>

                            </div>

                            <div class="ml-lg-auto col-lg-5 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700" style="margin-top: 40px;">

                                <p data-aos="fade-up" data-aos-delay="400">{{$datos->info_website}}</p>

                                <p data-aos="fade-up" data-aos-delay="500">Estamos ubicados en Santa Ana en 6º avenida sur y 5 calle poniente esquina No. 18, Santa Ana (Casa Matríz)
                                    <a rel="nofollow" href="https://www.google.com/maps/place/Dipol,+S.A.+de+C.V.+Casa+Matriz/@13.992966,-89.5600405,19z/data=!4m6!3m5!1s0x8f62e8bad3d4a413:0x9f6b794cac3bbefe!8m2!3d13.9928704!4d-89.5596081!16s%2Fg%2F1hf2nz0zk?hl=es" target="_blank">
                                        (Ver en Google Maps) </a>
                                    y en 13 Avenida sur entre 7 Calle Oriente y Calle Santa Cruz No. 17 Santa Ana
                                    <a rel="nofollow" href="https://goo.gl/maps/7Q4AnEF4JB734XiH6" target="_blank">
                                        (Ver en Google Maps) </a>
                                    . También tenemos presencia en San Salvador en Calle Concepción y 10 Avenida Norte No. 115, Contiguo a TICA BUS
                                    <a rel="nofollow" href="https://goo.gl/maps/kdGhdrWiw1Zi2pRk6" target="_blank">
                                        (Ver en Google Maps) </a></p>
                            </div>
                    </div>
            </div>
        @endforeach
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
    {{--@include('frontend.ofertas.ofertas')--}}
</section>

    <!-- CONTACT -->
    <section class="contact section" id="contact">
        @foreach ($dato as $datos)
        <div class="container">
            <h2 class="mb-4" id="txt"> SANTA ANA</h2>
            <div class="row">
                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Información De Contacto.</h2>
                        <p class="mt-3">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">saladeventasucursal2@dipolsa.com</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-phone mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">{{$datos->fijo_sa}}</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-whatsapp mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">{{$datos->wa_sa}}</a>
                        </p>

                        <img src="{{ asset("/images/dipolsantana.jpg") }}" class="img-fluid" alt="Logo">

                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Donde nos puedes <span>encontrar</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 13 Avenida sur entre 7 Calle Oriente y Calle Santa Cruz No. 17 </p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1368.7763355132204!2d-89.55239453265463!3d13.989284444488803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633175db32b88b%3A0x2e562c52477d51bc!2sDipol%2C%20S.A.%20de%20C.V%20Sucursal%20No.%202%20Santa%20Ana!5e0!3m2!1ses!2ssv!4v1677273394751!5m2!1ses!2ssv" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>Calle Concepción y 10 Avenida Norte No. 115, Contiguo a TICA BUS</p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d778.540415992494!2d-89.1867565!3d13.7003641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63318709d9b429%3A0x6ebade7368b54103!2sDipol%2C%20S.A.%20de%20C.V.%20Sucursal%201%20San%20Salvador!5e1!3m2!1ses!2ssv!4v1677273475060!5m2!1ses!2ssv" width="600" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Información De Contacto.</h2>
                        <p class="mt-3">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">saladeventasansalvador@dipolsa.com</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-phone mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">{{$datos->fijo_ss}}</a>
                        </p>
                        <p class="mt-3">
                            <i class="fa fa-whatsapp mr-1"></i>
                            <a href="{{ url("#") }}" target="_blank">{{$datos->wa_ss}}</a>
                        </p>

                        <img src="{{ asset("/images/dipolmatriz.jpg") }}" class="img-fluid" alt="Logo">

                    </div>

            </div>
        </div>
        @endforeach
    </section>

    <!-- ANUNCIOS -->
    @include('frontend.slider.slider')



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
