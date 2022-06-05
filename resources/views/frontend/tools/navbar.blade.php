<!--Main Header-->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="@if (request()->is('/')) active @endif">
          <a href="{{ route('home.index') }}">Beranda</a>
        </li>
        {{-- li active is request --}}
        <li class="@if (request()->is('about')) active @endif">
          <a href="{{ route('about.index') }}">Tentang Kami</a>
        </li>
        <li class="@if (request()->is('service')) active @endif">
          <a href="{{ route('service.index') }}">Layanan</a>
        </li>
        <li class="@if (request()->is('gallery')) active @endif">
          <a href="{{ route('gallery.index') }}">Galeri</a>
        </li>
        <li class="@if (request()->is('doctor')) active @endif">
          <a href="{{ route('doctor.index') }}">Dokter Kami</a>
        </li>
        <li class="@if (request()->is('appointment')) active @endif">
          <a href="{{ route('appointment.index') }}">Buat Janji Temu</a>
        </li>
        <li class="@if (request()->is('blog*')) active @endif">
          <a href="{{ route('blog.index') }}">Blog</a>
        </li>
        <li class="@if (request()->is('contact')) active @endif">
          <a href="{{ route('contact.index') }}">Kontak Kami</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<!--End Main Header -->
