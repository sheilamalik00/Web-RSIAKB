@extends('frontend.master')

@section('content')
  <!--=================================
        =            Page Slider            =
        ==================================-->
  <div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url({{ asset('asset/frontend/images/fotoslider.png') }})">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slide Content Start -->
            <div class="content style text-center">
              <h2 class="text-white text-bold mb-2">Selamat Datang di RSIA Karunia Bunda</h2>
              <p class="tag-text mb-5">Melayani Dengan Hati</p>
            </div>
            <!-- Slide Content End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item"
      style="background-image:url({{ asset('asset/frontend/images/slider/slider-bg-2.jpg') }});">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slide Content Start-->
            <div class="content style text-right">
              <h2 class="text-white">Kepuasan Anda adalah <br>Prioritas Kami</h2>
            </div>
            <!-- Slide Content End-->
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item"
      style="background-image:url({{ asset('asset/frontend/images/slider/slider-bg-3.jpg') }})">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Slide Content Start -->
            <div class="content text-center style">
              <h2 class="text-white text-bold mb-2">Best Medical Services</h2>
              <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt,
                <br>eius pariatur minus itaque nostrum.
              </p>
              <a href="shop.html" class="btn btn-main btn-white">shop now</a>
            </div>
            <!-- Slide Content End -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====  End of Page Slider  ====-->

  <section class="cta">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-block">
            <div class="emmergency item">
              <i class="fa fa-phone"></i>
              <h2>Telepon</h2>
              <a href="#">021-5520356</a>
              <p>Layanan Informasi dan pendaftaran 24 jam</p>
            </div>
            <div class="top-doctor item">
              <i class="fa fa-stethoscope"></i>
              <h2>Pelayanan 24 Jam</h2>
              <p>Layanan IGD 24 Jam adalah pelayanan awal untuk pasien gawat darurat yang
                membutuhkan tindakan segera</p>
              {{-- <a href="#" class="btn btn-main">Read more</a> --}}
            </div>
            <div class="working-time item">
              <i class="fa fa-hourglass-o"></i>
              <h2>Waktu Pelayanan</h2>
              <ul class="w-hours">
                <li>Senin - Jum'at<span>24 Jam</span></li>
                <li>Sabtu<span>24 Jam</span></li>
                <li>Minggu<span>24 Jam</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--about section-->
  <section class="feature-section section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="image-content">
            <div class="section-title text-center">
              <h3>Pelayanan
                <span>yang tersedia di Rumah Sakit Kami</span>
              </h3>
              <p>Pelayanan medik dasar dan spesialistik serta pelayanan penunjang yang
                tersedia di RSIA Karunia Bunda.</p>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="item">
                  <div class="icon-box">
                    <figure>
                      <a href="#">
                        <img src="{{ asset('asset/frontend/images/resource/1.png') }}" alt="">
                      </a>
                    </figure>
                  </div>
                  <h6>Poli Kebidanan dan Kandungan</h6>
                  <p>Poliklinik yang bertujuan untuk membantu pasien dengan kasus yang berhubungan
dengan kehamilan dan penyakit kandungan.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="item">
                  <div class="icon-box">
                    <figure>
                      <a href="#">
                        <img src="{{ asset('asset/frontend/images/resource/2.png') }}" alt="">
                      </a>
                    </figure>
                  </div>
                  <h6>Poli Spesialis Anak</h6>
                  <p>Layanan pemeriksaan dan pengobatan terhadap bayi dan anak sakit oleh Dokter
Spesialis Anak yang meliputi: Pemeriksaan Kesehatan Anak, Pemeriksaan Tumbuh Kembang,
dan Imunisasi.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="item">
                  <div class="icon-box">
                    <figure>
                      <a href="#">
                        <img src="{{ asset('asset/frontend/images/resource/3.png') }}" alt="">
                      </a>
                    </figure>
                  </div>
                  <h6>Poli Penyakit Dalam</h6>
                  <p>Unit layanan yang menangani konsultasi dan penanganan masalah kesehatan organ dalam
tanpa bedah seperti diabetes, hipertensi, ginjal, saluran cerna, infeksi, alergi, imunologi, geriatri, dan
sebagainya</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="item">
                  <div class="icon-box">
                    <figure>
                      <a href="#">
                        <img src="{{ asset('asset/frontend/images/resource/4.png') }}" alt="">
                      </a>
                    </figure>
                  </div>
                  <h6>Poli Bedah</h6>
                  <p>Unit pelayanan yang diberikan kepada pasien yang membutuhkan pelayanan kesehatan
melalui proses pembedahan umum, seperti pasien pasca kecelakaan, operasi Kecil, perawatan luka biasa/luka oleh karena DM, perawatan luka pasca operasi Hernia, Usus Buntu, Haemoroid (Wasir),
dan lain – lain serta konsultasi seputar proses pembedahan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End about section-->

  <!--Start about us area-->
  <section class="service-tab-section section">
    <div class="outer-box clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Nav tabs -->
            <div class="tabs">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#dormitory" data-toggle="tab">Farmasi</a>
                </li>
                <li role="presentation">
                  <a href="#orthopedic" data-toggle="tab">Laboratorium</a>
                </li>
                <li role="presentation">
                  <a href="#sonogram" data-toggle="tab">Rontgen</a>
                </li>
                <li role="presentation">
                  <a href="#x-ray" data-toggle="tab">Ruang Operasi</a>
                </li>
                <li role="presentation">
                  <a href="#diagnostic" data-toggle="tab">Ruang Persalinan</a>
                </li>
              </ul>
            </div>
            <!--Start single tab content-->
            <div class="tab-content">
              <div class="service-box tab-pane fade in active row" id="dormitory">
                <div class="col-md-6">
                  <img class="img-responsive" src="images/services/service-one.jpg" alt="service-image">
                </div>
                <div class="col-md-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Farmasi</h3>
                    </div>
                    <div class="text">
                      <p>Instalasi farmasi rumah sakit merupakan suatu fasilitas rumah sakit yang menjadi tempat penyelenggaraan semua kegiatan untuk keperluan rumah sakit itu sendiri. Instalasi farmasi rumah sakit bertugas untuk menangani obat-obatan. Fasilitas dari sebuah instalasi farmasi rumah sakit adalah apotek, yang berfungsi untuk memudahkan pasien atau konsumen dalam mencari obat yang dibutuhkan.</p>
                    </div>
                    <a href="#" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade in" id="orthopedic">
                <div class="col-md-6">
                  <img class="img-responsive" src="images/services/service-two.jpg" alt="service-image">
                </div>
                <div class="col-md-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Laboratorium</h3>
                    </div>
                    <div class="text">
                      <p>Instalasi laboratorium merupakan salah satu instalasi yang ada di rumah sakit. Instalasi laboratorium merupakan bagian dari pelayanan penunjang yang memiliki tujuan membantu diagnosa suatu penyakit sehingga dokter dapat menangani suatu penyakit dengan baik, tepat, cepat dan akurat. Selain itu, instalasi laboratorium juga bertujuan untuk menentukan resiko terhadap suatu penyakit dengan harapan suatu penyakit dapat terdeteksi secara dini</p>
                    </div>
                    <a href="#" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade in" id="sonogram">
                <div class="col-md-6">
                  <img class="img-responsive" src="images/services/service-three.jpg" alt="service-image">
                </div>
                <div class="col-md-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Rontgen</h3>
                    </div>
                    <div class="text">
                      <p>Rontgen merupakan prosedur pemeriksaan yang dilakukan untuk melihat kondisi dari tulang, persendian hingga organ-organ yang terdapat di dalam tubuh. Terdapat beberapa kondisi dan penyakit yang dapat di deteksi dengan melakukan rontgen, diantaranya adalah patah tulang, osteoporosis, infeksi, gangguan pencernaan, pembengkakkan jantung serta tumor. Dalam beberapa kasus diperlukan tambahan obat kontras yang perlu diminum atau disuntikkan untuk memperjelas dan memperlihatkan gambaran detail fungsi dari organ yang berada di bagian dalam.</p>
                    </div>
                    <a href="#" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade in" id="x-ray">
                <div class="col-md-6">
                  <img class="img-responsive" src="images/services/service-four.jpg" alt="service-image">
                </div>
                <div class="col-md-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Ruang Operasi</h3>
                    </div>
                    <div class="text">
                      <p>Ruang operasi merupakan suatu unit khusus pada rumah sakit yang berfungsi sebagai daerah pelayanan kritis yang mengutamakan aspek hirarki zonasi sterilitas. Ruang operasi digunakan untuk melakukan tindakan operasi dan atau pembedahan.</p>
                    </div>
                    <a href="#" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
              <!--Start single tab content-->
              <div class="service-box tab-pane fade in" id="diagnostic">
                <div class="col-md-6">
                  <img class="img-responsive" src="images/services/service-five.jpg" alt="service-image">
                </div>
                <div class="col-md-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Ruang Persalinan</h3>
                    </div>
                    <div class="text">
                      <p>Ruangan persalinan merupakan unit pelayanan pada rumah sakit yang berfungsi untuk membantu proses kelahiran bayi.</p>
                    </div>
                    <a href="#" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
              <!--End single tab content-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End about us area-->

  <!--Service Section-->
  <section class="service-section bg-gray section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Layanan
          <span>Penunjang</span>
        </h3>
        {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque
          <br>
          fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!
        </p> --}}
      </div>
      <div class="row items-container clearfix">
        <div class="item">
          <div class="inner-box">
            <div class="img_holder">
              <a href="service.html">
                <img src="{{ asset('asset/frontend/images/gallery/1.jpg') }}" alt="images" class="img-responsive">
              </a>
            </div>
            <div class="image-content text-center">
              <span>Unit Gawat Darurat</span>
              <a href="#">
                <h6>UGD</h6>
              </a>
              <p>adalah unit pelayanan yang memberikan pelayanan pertama pada pasien dengan ancaman kematian
dan atau resiko kecacatan secara terpadu yang memilki potensi untuk mengalami kondisi
kegawat darutatan, baik karena penyakit, kecelakaan, keracunan, diserang binatang buas,
atau penyebab lainnya.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="inner-box">
            <div class="img_holder">
              <a href="service.html">
                <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
              </a>
            </div>
            <div class="image-content text-center">
              <span>Better Service At Low Cost</span>
              <a href="service.html">
                <h6>ICU</h6>
              </a>
              <p>adalah ruang khusus untuk pasien krisis yang memerlukan perawatan intensif dan observasi
berkelanjutan, dilengkapi dengan berbagai peralatan modern untuk mendukung monitoring pasien
seperti pasien monitor, ventilator, DC Shock (defibrillator), incubator, infant warmer, dan C-Pap.
Instalasi Rawat Intensif RSIA KArunia Bunda terdiri dari ICU, HCU, & PERINA.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="inner-box">
            <div class="img_holder">
              <a href="service.html">
                <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
              </a>
            </div>
            <div class="image-content text-center">
              <span>Better Service At Low Cost</span>
              <a href="service.html">
                <h6>Laboratorium</h6>
              </a>
              <p>Pelayanan pemeriksaan spesimen klinik di bidang hematologi, kimia klinik, mikrobiologi klinik,
parasitologi klinik, dan imunologi klinik.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="inner-box">
            <div class="img_holder">
              <a href="service.html">
                <img src="images/gallery/1.jpg" alt="images" class="img-responsive">
              </a>
            </div>
            <div class="image-content text-center">
              <span>Better Service At Low Cost</span>
              <a href="service.html">
                <h6>Radiologi</h6>
              </a>
              <p>Radiologi adalah bagian dari ilmu kedokteran yang mempelajari tentang teknologi pencitraan, baik
gelombang elektromagnetik maupun gelombang mekanik guna memindai bagian dalam tubuh
manusia untuk mendeteksi suatu penyakit.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="inner-box">
            <div class="img_holder">
              <a href="service.html">
                <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
              </a>
            </div>
            <div class="image-content text-center">
              <span>Better Service At Low Cost</span>
              <a href="service.html">
                <h6>Farmasi</h6>
              </a>
              <p>Pelayanan obat atas resep dokter
Pelayanan Informasi Obat (PIO)
Pelayanan Farmasi Klinik</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="inner-box">
            <div class="img_holder">
              <a href="service.html">
                <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
              </a>
            </div>
            <div class="image-content text-center">
              <span>Better Service At Low Cost</span>
              <a href="service.html">
                <h6>Instalasi Gizi</h6>
              </a>
              <p>Merupakan salah satu Instalasi Pelayanan Penunjang Medis yang memberikan pelayanan gizi
di rumah sakit untuk memenuhi kebutuhan gizi baik pasien Rawat Inap maupun Rawat Jalan
serta konsultasi terkait problem gizi, metabolism tubuh dan peningkatan kesehatan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Service Section-->

  <!--team section-->
  <section class="team-section section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Dokter Spesialis
          <span>Kami</span>
        </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
          <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?
        </p>
      </div>
      <div class="row">
        @foreach ($doctor as $item)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              @if ($item->image == null)
                {{-- images/doctor.svg --}}
                <img src="{{ asset('asset/frontend/images/doctor.svg') }}" alt="doctor" class="img-responsive">
              @else
                <img src="{{ Storage::url('public/doctor/') . $item->image }}" alt="doctor" class="img-responsive">
              @endif
              <div class="contents text-center">
                <h4>{{ $item->name }}</h4>
                <p></p>
                {{-- <a href="#" class="btn btn-main">read more</a> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--End team section-->

  <!--testimonial-section-->
  {{-- <section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
      <div class="section-title text-center">
        <h3>Testimoni
          <span>Pasien</span>
        </h3>
      </div>
      <div class="testimonial-carousel">
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/1.png" alt="">
              </figure>
            </div>
            <h6>Ozak D</h6>
            <p>Rumah sakit dengan Pelayanan terbaik di kota tangerang,, Kebanyakan rumah sakit me nomor dua kan pasien
              bpjs tp kemarin lusa 11-08-19 saya datang ke rs karunia bunda langsung ditangani oleh dokter ahli tanpa
              harus mengurusi pendaftaran atau pembayaran terlebih dahulu.. meskipun saya menggunakan bpjs suster dan
              dokter ramah, dan suster jaga 24jam standby untuk pasien.</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/2.png" alt="">
              </figure>
            </div>
            <h6>Nia Elia</h6>
            <p>Rumah sakit terbaik mnurut saya karna stiap ada tindakan sllu minta izin dlu sma pihak kluarga,
              susternya juga ramah-ramah</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/3.png" alt="">
              </figure>
            </div>
            <h6>Amy Adams</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/1.png" alt="">
              </figure>
            </div>
            <h6>Adam Rose</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/2.png" alt="">
              </figure>
            </div>
            <h6>David Warner</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/3.png" alt="">
              </figure>
            </div>
            <h6>Amy Adams</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/1.png" alt="">
              </figure>
            </div>
            <h6>Adam Rose</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/2.png" alt="">
              </figure>
            </div>
            <h6>David Warner</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
        <!--Slide Item-->
        <div class="slide-item">
          <div class="inner-box text-center">
            <div class="image-box">
              <figure>
                <img src="images/testimonials/3.png" alt="">
              </figure>
            </div>
            <h6>Amy Adams</h6>
            <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--End testimonial-section-->

  <!-- Contact Section -->
  <section class="appoinment-section section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="accordion-section">
            <div class="section-title">
              <h3>FAQ</h3>
            </div>
            <div class="accordion-holder">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Apakah RSIA Karunia Bunda menerima pasien umum, BPJS dan asuransi?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      Ya, RSIA Karunia Bunda menerima pasien umum, pasien BPJS dan pasien peserta
                      asuransi yag telah bekerja sama
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apa saja persyaratan untuk berobat menggunakan BPJS?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      Peserta yang mendapat rujukan dari faskes 1 harus membawa kelengkapan berkas
                      berupa:
                      <ul>
                        • Surat rujukan asli beserta fotocopy 2 lembar
                        • Surat kontrol asli
                        • Kartu BPJS asli dan fotocopy 2 lembar
                        • KTP asli dan fotocopy 2 lembar
                        • Fotocopy KK 2 lembar
                      </ul>

                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Bagaimana alur pelayanan pasien BPJS?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      • Pasien yang sudah mendapatkan rujukan, selanjutnya melakukan pendaftaran di
                      resepsionis dengan membawa kelengkapan berkas yang sudah ditentukan
                      <br />
                      • Sebelum melakukan pendaftaran ke resepsionis, peserta mengambil nomor antrian
                      <br />
                      • Setelah mendapatkan nomor antrian, tunggu sampai nomor antrian dipanggil dan
                      lakukan pendaftaran ke resepsionis.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="contact-area">
            <div class="section-title">
              <h3>Request
                <span>Janji Temu</span>
              </h3>
            </div>
            <form name="contact_form" class="default-form contact-form" action="{{ route('kirim-jadwal') }}"
              method="get">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="noktp" placeholder="Nomor KTP" required="">
                  </div>

                  <div class="form-group">
                    <select name="poli" id="spesialis">
                      <option>Pilih Spesialis</option>

                      @foreach ($specialist as $index)
                        <option value="{{ $index->id }}">{{ $index->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" name="nophone" placeholder="No Telepon" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" placeholder="email">
                  </div>

                  <div class="form-group">
                    <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                  <div class="form-group">
                    <input type="date" id="tgl_berobat" class="tgl_berobat" name="tgl_berobat"
                      placeholder="Tanggal Berobat" required="">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <select name="doctor" id="doctor">
                      <option>Dokter</option>

                    </select>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">Kirim</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
@endsection


@section('scriptJs')
  <script>
    //get api doctor from select specialist
    $('#spesialis').change(function() {
      var specialist = $(this).val();
      var tgl_berobat = $('#tgl_berobat').val();
      if (specialist != null && tgl_berobat != null) {
        $.ajax({
          url: "{{ url('/api/doctor') }}",
          type: "GET",
          data: {
            specialist: specialist,
            tgl_berobat: tgl_berobat
          },
          success: function(data) {
            $('#doctor').empty();
            $('#doctor').append('<option>Dokter</option>');
            $.each(data, function(key, value) {
              $('#doctor').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
          }
        });
      }
    });
    $('#tgl_berobat').change(function() {
      var specialist = $('#spesialis').val();
      var tgl_berobat = $('#tgl_berobat').val();
      console.log(tgl_berobat);
      if (specialist != null && tgl_berobat != null) {
        $.ajax({
          url: "{{ url('/api/doctor') }}",
          type: "GET",
          data: {
            specialist: specialist,
            tgl_berobat: tgl_berobat
          },
          success: function(data) {
            $('#doctor').empty();
            $('#doctor').append('<option>Dokter</option>');
            $.each(data, function(key, value) {
              $('#doctor').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
          }
        });
      }
    });
  </script>
@endsection
