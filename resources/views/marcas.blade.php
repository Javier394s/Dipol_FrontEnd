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
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"></div>
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
    <section class="class-section" id="promociones">
            <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5" style="margin-top:100px;">
                                <h2 data-aos="fade-up" data-aos-delay="200" >TOYOTA</h2>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/corolla.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("corolla.html") }}">COROLLA</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/hilux.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("4runner.html") }}">4RUNNER</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("echo.html") }}">ECHO</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("hiluxrevo.html") }}">HILUX REVO</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("hiluxvigo.html") }}">HILUX VIGO</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("rav4.html") }}">RAV4</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("tacoma.html") }}">TACOMA</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("tercel.html") }}">TERCEL</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("yaris.html") }}">YARIS</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/mirai.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("yarisia.html") }}">YARIS IA</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                         </div>

                    </div>
            </div>
    </section>

        <!-- Honda-->
        <section class="class-section" id="promociones">
            <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h2 data-aos="fade-up" data-aos-delay="200">Honda</h2>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("layout/civic.html") }}">CIVIC</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("crv.html") }}">CRV</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("fit.html") }}">FIT</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("hrv.html") }}">HR-V</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
          <!-- Honda-->
          <section class="class-section" id="promociones">
            <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h2 data-aos="fade-up" data-aos-delay="200">NISSAN</h2>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("frontier.html") }}">FRONTIER</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("np300.html") }}">NP300 NAVARA</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("rogue") }}">ROGUE</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("sentra") }}">SENTRA</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="{{ url("versa") }}">VERSA</a></h3>                                   
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
    
</section>
<!-- Hyundai-->
<section class="class-section" id="promociones">
  <div class="container">
          <div class="row">

                  <div class="col-lg-12 col-12 text-center mb-5">
                      <h2 data-aos="fade-up" data-aos-delay="200">Hyundai</h2>
                  </div>

                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1"><a href="{{ url("accent.html") }}">ACCENT</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">ELANTRA</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">SANTA FE</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">SANTA FE SPORT</a></h3>                                   
                            </p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
  </div>
</section>
</section>
<!-- Jeep-->
<section class="class-section" id="promociones">
  <div class="container">
          <div class="row">

                  <div class="col-lg-12 col-12 text-center mb-5">
                      <h2 data-aos="fade-up" data-aos-delay="200">JEEP</h2>
                  </div>

                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">CHEROKKE</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">COMPASS</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">PATRIOT</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">RENEGADE</a></h3>                                   
                            </p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
  </div>
</section>
</section>
<!-- Ford-->
<section class="class-section" id="promociones">
  <div class="container">
          <div class="row">

                  <div class="col-lg-12 col-12 text-center mb-5">
                      <h2 data-aos="fade-up" data-aos-delay="200">FORD</h2>
                  </div>

                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">ESCAPE</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">EXPLORER</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">F150</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>

                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">F150</a></h3>                                   
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">FOCUS</a></h3>                                   
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">FOCUS HATCHBACK</a></h3>                                   
                            </p>
                        </div>
                    </div>
                </div>


              </div>
          </div>
  </div>
</section>
</section>
<!--Chevrolet-->
<section class="class-section" id="promociones">
  <div class="container">
          <div class="row">

                  <div class="col-lg-12 col-12 text-center mb-5">
                      <h2 data-aos="fade-up" data-aos-delay="200">CHEVROLET</h2>
                  </div>

                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">CRUZE</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">SONIC</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                      <div class="class-thumb">
                          <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">

                          <div class="class-info">
                              <h3 class="mb-1">SPARK</a></h3>                                   
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
</section>
<!--Chevrolet-->
<section class="class-section" id="promociones">
    <div class="container">
            <div class="row">
  
                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h2 data-aos="fade-up" data-aos-delay="200">KIA</h2>
                    </div>
  
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">FORTE</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">RIO</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">SORENTO</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>

                     
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">SPORTAGE</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                     
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">SOUL</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </section>
  <!--Mitsubishi-->
<section class="class-section" id="promociones">
    <div class="container">
            <div class="row">
  
                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h2 data-aos="fade-up" data-aos-delay="200">MITSUBISHI</h2>
                    </div>
  
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">LANCER</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/crv.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">MIRAGE</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/accord.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">OUTLANDER</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </section>
  <!--Pontiac-->
<section class="class-section" id="promociones">
    <div class="container">
            <div class="row">
  
                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h2 data-aos="fade-up" data-aos-delay="200">Pontiac</h2>
                    </div>
  
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset("/images/civic.jpg") }}" class="img-fluid" alt="Class">
  
                            <div class="class-info">
                                <h3 class="mb-1">VIBE</a></h3>                                   
                                </p>
                            </div>
                        </div>
                    </div>
                  
            </div>
    </div>
  </section>
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