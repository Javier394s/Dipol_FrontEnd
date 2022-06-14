<section class="contact section" id="destacados">
    <h2 class="mb-4" id="txt"> DESTACADOS </h2>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" data-interval="6000">

            @php $i = 1; @endphp
            @foreach ($ofertas as $item)

            <div class="carousel-item {{ $i == '1' ? 'active':'' }}" >
                @php
                    $i++;
                @endphp
                <div style="display: flex; justify-content: center;
                align-items: center;">
                    <img class="d-block w-75" src="{{ asset('uploads/ofertas/'.$item->image) }}" alt="ofertas imagen">
                </div>
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
