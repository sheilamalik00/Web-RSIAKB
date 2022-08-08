@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url({{asset('asset/frontend/tambahan/layanan.jpg')}});">
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
        @forelse ($galleryVideo as $item)
        <div class="col-sm-6">
          <div class="video-gallery-item">
            <div class="image-holder">
                <video class="img-responsive" controls>
                  <source src="{{$item->getFile()}}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              {{-- <img src="images/gallery/video-thumb-01.jpg" class="" alt="video-gallery"> --}}
              <a data-fancybox href="{{$item->getFile()}}"><i class="fa fa-play"></i></a>
            </div>
            <h3>{{$item->name}}</h3>
          </div>
        </div>
        @empty
        <div class="col-md-12">
          <div class="alert alert-warning">
            <p>Tidak Ada Media Yang di upload</p>
          </div>
        </div>
        @endforelse

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
            {{-- <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
              <br>iews. Iterative approaches to corporate strategy...
            </p> --}}
          </div>
        </div>
        @forelse ($galleryImage as $item)
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="{{$item->getFile()}}" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href="{{$item->getFile()}}"></a>
            <h3>{{$item->name}}</h3>
            <p>{{$item->description}}</p>
          </div>
        </div>
        @empty
        <div class="col-md-12">
          <div class="alert alert-warning">
            <p>Tidak Ada Foto Yang di upload</p>
          </div>
        </div>
        @endforelse

      </div>
    </div>
  </section>
@endsection
