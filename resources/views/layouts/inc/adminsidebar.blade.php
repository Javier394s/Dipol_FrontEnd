<section>
    <!-- Sidebar -->
    <nav style="margin-top: 85px"
    id="sidebarMenu"
    class="collapse d-lg-block sidebar collapse bg-white"
>
<div class="position-sticky">
  <div class="list-group list-group-flush mx-3 mt-4">
  <a
      href="{{ url('home-slide') }}"
      class="list-group-item list-group-item-action py-2 ripple"
      aria-current="true"
      >
      <i class="fas fa-calendar fa-fw me-3"></i
      ><span>Slides Anuncios</span>
  </a>
  <a
    href="{{ url('home-products') }}"
    class="list-group-item list-group-item-action py-2 ripple"
    ><i class="fas fa-lock fa-fw me-3"></i><span>Productos</span></a>
    <a href="{{ route('home-destacados') }}" class="list-group-item list-group-item-action py-2 ripple">
                  <i class="fas fa-star fa-fw me-3"></i><span>Destacados</span>
    </a>
    <a href="{{ route('home-ofertas') }}" class="list-group-item list-group-item-action py-2 ripple">
                  <i class="fas fa-star fa-fw me-3"></i><span>Ofertas</span>
    </a>
  </div>
</div>
</nav>
<!-- Sidebar -->
</section>
