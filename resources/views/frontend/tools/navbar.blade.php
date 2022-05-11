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
        <li class="active">
          <a href="{{route('home.index')}}">Beranda</a>
        </li>
        <li>
          <a href="{{route('about.index')}}">Tentang Kami</a>
        </li>
        <li>
          <a href="service.html">Layanan</a>
        </li>
        <li>
          <a href="{{route('gallery.index')}}">Galeri</a>
        </li>
        <li>
          <a href="{{route('doctor.index')}}">Dokter Kami</a>
        </li>
        <li>
          <a href="appointment.html">Buat Janji Temu</a>
        </li>
        <li>
          <a href="{{route('blog.index')}}">Blog</a>
        </li>
        <li>
          <a href="{{route('contact.index')}}">Kontak Kami</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<!--End Main Header -->
