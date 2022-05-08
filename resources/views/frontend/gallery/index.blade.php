@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
      <div class="title-text">
        <h1>Galeri</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Galeri</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <section class="video-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3>Koleksi Media
              <span>dari Rumah Sakit Kami</span>
            </h3>
            <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
              <br>iews. Iterative approaches to corporate strategy...
            </p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="video-gallery-item">
            <div class="image-holder">
              <img src="images/gallery/video-thumb-01.jpg" class="img-responsive" alt="video-gallery">
              <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0"><i class="fa fa-play"></i></a>
            </div>
            <h3>January 2018 Florida Conference</h3>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="video-gallery-item">
            <div class="image-holder">
              <img src="images/gallery/video-thumb-02.jpg" class="img-responsive" alt="video-gallery">
              <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0">
                <i class="fa fa-play"></i>
              </a>
            </div>
            <h3>December 2017 los angeles Conference</h3>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="video-gallery-item">
            <div class="image-holder">
              <img src="images/gallery/video-thumb-03.jpg" class="img-responsive" alt="video-gallery">
              <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0">
                <i class="fa fa-play"></i>
              </a>
            </div>
            <h3>November 2017 Texas Conference</h3>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="video-gallery-item">
            <div class="image-holder">
              <img src="images/gallery/video-thumb-04.jpg" class="img-responsive" alt="video-gallery">
              <a data-fancybox href="https://www.youtube.com/watch?v=h-h5Mhlt6O0">
                <i class="fa fa-play"></i>
              </a>
            </div>
            <h3>October 2017 san francisco Conference</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3>Koleksi Foto
              <span>dari Rumah Sakit Kami</span>
            </h3>
            <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
              <br>iews. Iterative approaches to corporate strategy...
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="images/gallery/gallery-01.jpg" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="images/gallery/gallery-01.jpg"></a>
            <h3>Facility 01</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="images/gallery/gallery-02.jpg" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="images/gallery/gallery-02.jpg"></a>
            <h3>Facility 02</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="images/gallery/gallery-03.jpg" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="images/gallery/gallery-03.jpg"></a>
            <h3>Facility 03</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="images/gallery/gallery-04.jpg" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="images/gallery/gallery-04.jpg"></a>
            <h3>Facility 04</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="images/gallery/gallery-05.jpg" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="images/gallery/gallery-05.jpg"></a>
            <h3>Facility 05</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="images/gallery/gallery-06.jpg" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="images/gallery/gallery-06.jpg"></a>
            <h3>Facility 06</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
