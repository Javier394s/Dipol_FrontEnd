<section class="contact section" id="anuncios">
    <h2 class="mb-4" id="txt"> ANUNCIOS </h2>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" data-interval="6000">

        @php $i = 1; @endphp
        @foreach ($slider as $slideritem)

        <div class="carousel-item {{ $i == '1' ? 'active':'' }}">
            @php
                $i++;
            @endphp
            <img id="carouselAnuncios" class="d-block w-100" src="{{ asset('uploads/slider/'.$slideritem->image) }}" alt="slide imagen">
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
</section>

<!-- ANUNCIOS
<section class="contact section" id="anuncios">
    <div class="container">
        <h2 class="mb-4" id="txt"> ANUNCIOS </h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" data-interval="6000">
                <div class="carousel-item active">
                    <img id="carouselAnuncios" class="d-block w-100" src="{{ asset("/images/anuncios/anun10Mayo.jpg") }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img id="carouselAnuncios" class="d-block w-100" src="{{ asset("/images/anuncios/anunProd.jpg") }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img id="carouselAnuncios" class="d-block w-100" src="{{ asset("/images/anuncios/anunExample.jpg") }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="{{ url("#carouselExampleControls") }}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="{{ url("#carouselExampleControls") }}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
    </div>
</section>
-->
