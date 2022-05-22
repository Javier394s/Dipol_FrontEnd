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
                        <a href="{{ url("#promociones") }}" class="nav-link smoothScroll">DESTACADOS</a>
                        <ul>
                            <li class="dropdown-item"><a class="item-text" href="{{ url("#promociones") }}">OFERTAS</a></li>
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

                                    <h1 style="margin-top: 220px;" class="text-white" data-aos="fade-up" data-aos-delay="500">"CALIDAD Y RAPIDEZ A BUEN PRECIO"</h1>
                                </div>
                        </div>
                    </div>
            </div>
    </section>

    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Multipart</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Para mayor información</h6>

                    <p class="mr-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="{{ url("#contacto") }}" target="_blank">Ventas@multipartsv.com</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i>
                        <a href="{{ url("#contacto") }}" target="_blank">+503 2440 3772</a>
                    </p>

                    <a href="{{ url("#contact") }}" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300">Más Información De Contacto</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horario De Trabajo</h2>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo : Cerrado</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes - Viernes</strong>

                            <p data-aos="fade-up" data-aos-delay="800">08:00 AM - 05:00 PM</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sábado</strong>

                            <p data-aos="fade-up" data-aos-delay="800">08:00 AM - 12:00 PM</p>
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

                                <p data-aos="fade-up" data-aos-delay="400">Nosotros, quienes formamos Multipart, S.A de C.V somos
                                    empresarios santanecos que hemos incursionado con éxito por muchos años en distintos proyectos en
                                    diferentes empresas.</p>

                                <p data-aos="fade-up" data-aos-delay="500">En esta ocasión estamos poniendo a disposición de la
                                    comunidad salvadoreña de talleristas, importadores y propietarios de vehículos en general el
                                    servicio de venta de carrocería, luces y accesorios nuevos para vehículos. La empresa nació en
                                    febrero del 2021 e inicio sus operaciones el 23 se septiembre del mismo año. Contamos con
                                    parqueo propio y nos puedes encontrar en Facebook como, <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100072798421030" target="_blank">Multipart SA de CV.</a></p>

                            </div>

                            <div class="ml-lg-auto col-lg-5 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700" style="margin-top: 40px;">

                                <p data-aos="fade-up" data-aos-delay="400">Ponemos a tu disposición la página Web en donde puedes
                                    encontrar una variedad de productos. Puedes consultar precios e inventario en los números de
                                    contacto y podrás hacer compras a través de transferencias bancarias, por medio visitas a nuestra
                                    tienda o en la comodidad de tu empresa o residencia cuando recibas tus productos a domicilio.</p>

                                <p data-aos="fade-up" data-aos-delay="500">Estamos ubicados en Santa Ana atrás del centro médico
                                    <a rel="nofollow" href="https://www.google.com/maps/place/MultipartSV+S.A+de+C.V/@13.9823191,-89.5624378,17z/data=!4m5!3m4!1s0x8f62e90e8e1ffb41:0x9edb7b93129cb7e8!8m2!3d13.9833863!4d-89.5606675" target="_blank">
                                        (Ver en Google Maps) </a>
                                    y muy pronto contaremos con una sucursal en San Salvador.
                                    En Multipart nos caracterizamos por la comercialización de productos de excelente calidad,
                                    elaborados con las mejores tecnologías, al mismo tiempo, contamos con un personal altamente
                                    calificado con el propósito de satisfacer las necesidades y expectativas de nuestros clientes.
                                Multipart es “Calidad y rapidez a buen precio”</p>
                            </div>
                    </div>
            </div>
    </section>


   <!-- PRODUCTOS EN OFERTAS -->
   <section class="class-section" id="promociones">
        <div class="container">
                <div class="row">
                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">DESTACADOS</h2>
                        </div>
                        @if ($destacados)
                            @foreach ($destacados as $item)
                                <div class="col-lg-4 col-md-6 col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                    <div class="class-thumb">
                                        <img src="{{ asset('uploads/destacados/'.$item->picture) }}" class="img-fluid" alt="Class">

                                        <div class="class-info">
                                            <h3 class="mb-1">{{ $item->name }}</h3>

                                            <span class="class-price">-%{{ $item->discount }}</span>

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
                            <h1>ATUALMENTE NÃO HÁ DESTACADOS!</h1>
                        </div>
                        @endif

                        {{-- <div class="col-lg-4 col-md-6 col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                            <div class="class-thumb">
                                <img src="http://api.multipartsv.com/images/class/bumper_frontal.jpg" class="img-fluid" alt="Class">

                                <div class="class-info">
                                    <h3 class="mb-1">Bumper Frontal</h3>

                                    <span class="class-price">-%35</span>

                                    <p class="mt-3">Toyota Corolla</p>
                                    <p class="mt-3">Año 2011 - 2015</p>
                                    <p class="mt-3">
                                        <i class="fa fa-envelope-o mr-1"></i>
                                        <a href="{{ url("{{ url(") }}"#") }}" target="_blank">Ventas@multipartsv.com</a>
                                    </p>
                                    <p class="mt-3">
                                        <i class="fa fa-phone mr-1"></i>
                                        <a href="{{ url("{{ url(") }}"#") }}" target="_blank">+503 2440 3772</a>
                                    </p>
                                    <p class="mt-3">
                                        <i class="fa fa-whatsapp mr-1"></i>
                                        <a href="{{ url("{{ url(") }}"#") }}" target="_blank">+503 7783 9827</a>
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                </div>
        </div>
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

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Av. Maria Auxiliadora, Santa Ana. 4º Avenida Sur Entre 23 y 25 Calle Poniente</p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.7912090104467!2d-89.56172934210272!3d13.983443600274796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d9b89368ad4f71d!2zMTPCsDU5JzAwLjQiTiA4OcKwMzMnMzguMyJX!5e0!3m2!1ses!2ssv!4v1649202620494!5m2!1ses!2ssv" width="1920" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>

                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
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

            </div>
        </div>
    </section>

    @include('frontend.slider.slider')



    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2022</p>
                        <p>Dev by VLS</p>
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
