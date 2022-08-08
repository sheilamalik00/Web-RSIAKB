@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url({{asset('asset/frontend/images/tentangkami.png')}});">
    <div class="container">
      <div class="title-text">
        <h1>Tentang Kami</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Tentang Kami</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <!-- Our Story -->
  <section class="story">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('asset/frontend/tambahan/Logo.png')}}" class="responsive" alt="story">
        </div>
        <div class="col-md-6">
          <div class="story-content">
            <h2>Tentang Kami</h2>
            <h5 class="tagline">"Melayani Dengan Hati"</h6>
              <p align="justify">Rumah Sakit Ibu & Anak Karunia Bunda merupakan rumah sakit swasta
                yang terletak di bilangan Kota Tangerang, Banten. RSIA Karunia Bunda mengutamakan
                kepuasan pelanggan dengan pelayanan prima.</p>
              <p align="justify">Pada mulanya tahun 1978 RSIA Karunia Bunda berdiri sebagai BPS Harti
                Wiratno. Kemudian, ditahun 2005 menjadi Rumah Bersalin Karunia Bunda. Di tahun 2009,
                Rumah Bersalin Karunia Bunda berubah menjadi Rumah Sakit Ibu dan Anak Karunia Bunda.
              </p>
              <p align="justify">Sesuai dengan mottonya melayani dengan hati, kami selalu mengutamakan
                kepuasan pelanggan dengan pelayanan kesehatan terpadu secara cepat, tepat dan
                profesional.</p>
              <h6>Visi</h6>
              <p>Menjadi Rumah Sakit Ibu dan Anak yang berorientasi kepada kepuasan pelanggan dengan
                pelayanan prima</p>
              <h6>Misi</h6>
              <p align="justify">Menyelenggarakan pelayanan kesehatan terpadu secara cepat, tepat dan
                profesional</p>
              <p align="justify">Meningkatkan sumber daya manusia berkualitas yang memiliki
                pengetahuan, keterampilan serta berdedikasi tinggi</p>
              <p align="justify">Menjalankan kegiatan operasional rumah sakit secara efektif, efisien
                dan informatif</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promo Video -->
  {{-- <section class="promo-video">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="block text-center">
            <h6>About Our Hospital</h6>
            <h1>The World <br>
              Class Hospitality
            </h1>
            <a data-fancybox
              href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0"><i
                class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="gallery bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3>Kumpulan Foto
              <span>dari Rumah Sakit Kami</span>
            </h3>
          </div>
        </div>
        @forelse ($gallery as $item)
        <div class="col-md-4 col-sm-6">
          <div class="gallery-item">
            <img src="{{$item->getFile()}}" class="img-responsive" alt="gallery-image">
            <a data-fancybox="images" href=""></a>
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
