<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Beranda RSIA Karunia Bunda</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">

  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

    
           
@include(frontend.tools.header)

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
              <a href="index.html">Beranda</a>
            </li>
            <li>
              <a href="about.html">Tentang Kami</a>
            </li>
            <li>
              <a href="service.html">Layanan</a>
            </li>
            <li>
              <a href="gallery.html">Galeri</a>
            </li>
            <li>
              <a href="team.html">Dokter Kami</a>
            </li>
            <li>
              <a href="appointment.html">Buat Janji Temu</a>
            </li>
            <li>
              <a href="blog.html">Blog</a>
            </li>
            <li>
              <a href="contact.html">Kontak Kami</a>
            </li>
            <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->

    <!--=================================
=            Page Slider            =
==================================-->
    <div class="hero-slider">
      <!-- Slider Item -->
      <div class="slider-item slide1" style="background-image:url(images/fotoslider.png)">
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
      <div class="slider-item" style="background-image:url(images/slider/slider-bg-2.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Slide Content Start-->
              <div class="content style text-right">
                <h2 class="text-white">We Care About <br>Your Health</h2>
                <p class="tag-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#" class="btn btn-main btn-white">about us</a>
              </div>
              <!-- Slide Content End-->
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Item -->
      <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
              </div>
              <div class="top-doctor item">
                <i class="fa fa-stethoscope"></i>
                <h2>Pelayanan 24 Jam</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta
                  suscipit vel eum</p>
                <a href="#" class="btn btn-main">Read more</a>
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
                <h3>Pelayanan Terbaik
                  <span>di Rumah Sakit Kami</span>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br>
                  nam error officia vero tempora alias? Sunt?</p>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="images/resource/1.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>Orthopedics</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam
                      pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="images/resource/2.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>Diaginostic</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam
                      pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="images/resource/3.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>Psycology</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam
                      pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="images/resource/4.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>General Treatment</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam
                      pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
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
                    <a href="#dormitory" data-toggle="tab">dormitory</a>
                  </li>
                  <li role="presentation">
                    <a href="#orthopedic" data-toggle="tab">orthopedic</a>
                  </li>
                  <li role="presentation">
                    <a href="#sonogram" data-toggle="tab">sonogram</a>
                  </li>
                  <li role="presentation">
                    <a href="#x-ray" data-toggle="tab">x-ray</a>
                  </li>
                  <li role="presentation">
                    <a href="#diagnostic" data-toggle="tab">diagnostic</a>
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
                        <h3>dormitory</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added. then a
                          dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added. then a dental
                          prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
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
                        <h3>orthopedic</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
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
                        <h3>sonogram</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
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
                        <h3>x-ray</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
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
                        <h3>diagnostic</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental
                          prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
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
            <span>yang Tersedia</span>
          </h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque
            <br>
            fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">
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
                  <h6>Dormitory</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
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
                  <h6>Germs Protection</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
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
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
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
                  <h6>Dormitory</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
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
                  <h6>Germs Protection</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
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
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
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
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>Dr. Robert Barrethion</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                <a href="#" class="btn btn-main">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="images/team/doctor-lab-3.jpg" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>Dr. Marry Lou</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                <a href="#" class="btn btn-main">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="images/team/event-2.jpg" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>Dr. Sansa Stark</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                <a href="#" class="btn btn-main">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End team section-->

    <!--testimonial-section-->
    <section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
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
    </section>
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
                          Why Should I choose Medical Health
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                      aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                        moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                        anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                        butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't
                        heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                          href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          What are the Centre’s visiting hours?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                        moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                        anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                        butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't
                        heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                          href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          How many visitors are allowed?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                      aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                        moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                        anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                        butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't
                        heard of them accusamus labore sustainable VHS.
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
              <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="Name" placeholder="Nama" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="Email" placeholder="E-Mail" required="">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="Phone" placeholder="Telepon" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="Date" placeholder="Tanggal" required="" id="datepicker">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <select name="subject">
                        <option>Dokter</option>
                        <option>dr. Dwi Indah Wulandari</option>
                        <option>dr. Anne Intan Nurbaity</option>
                        <option>dr. Benhard Aron</option>
                        <option>dr. Oktavia Utami</option>
                        <option>dr. Subandi Hasan, Sp.A.</option>
                        <option>dr. Milza Delfina, M.Sc., Sp.A.</option>
                        <option>dr. Athiyatul Aufie, Sp.A.</option>
                        <option>dr. Bayu Dwi Febrianto, Sp.OG</option>
                        <option>dr. Kukuh Wibowo Kustarto, SpOG (K)</option>
                        <option>dr. Kiki Maharani, Sp.PD</option>
                        <option>dr. Monika Rachmafuri, Sp.An</option>
                        <option>dr. Iyano Santoso, Sp.B</option>
                        <option>dr. Sonya Anasrul, Sp.Rad</option>
                        <option>dr. Diana Astari, Sp.PK</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea name="form_message" placeholder="Pesan" required=""></textarea>
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

    <!--footer-main-->
    <footer class="footer-main">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="about-widget">
                <h6>Hubungi Kami</h6>
                <ul class="location-link">
                  <li class="item">
                    <i class="fa fa-map-marker"></i>
                    <p>Jl. Aria Santika No.28, RT.003/RW.003, Margasari, Kec. Karawaci, Kota Tangerang, Banten 15114</p>
                  </li>
                  <li class="item">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#">
                      <p>rsiakaruniabunda@yahoo.com</p>
                    </a>
                  </li>
                  <li class="item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>021-5520356</p>
                  </li>
                </ul>
                <ul class="list-inline social-icons">
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <h6>Layanan</h6>
              <ul class="menu-link">
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Gawat Darurat/HCU/ICU</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Poli</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Laboratorium & Radiologi</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Farmasi</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Perinatologi</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="social-links">
                <h6>Informasi Terkini</h6>
                <ul>
                  <li class="item">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Post Title</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a href="#">Post Title</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container clearfix">
          <div class="copyright-text">
            <p>&copy; Copyright 2022. All Rights Reserved by
              <a href="index.html">RSIA Karunia Bunda</a>
            </p>
          </div>
          <ul class="footer-bottom-link">
            <li>
              <a href="index.html">Beranda</a>
            </li>
            <li>
              <a href="about.html">Tentang Kami</a>
            </li>
            <li>
              <a href="contact.html">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!--End footer-main-->

  </div>
  <!--End pagewrapper-->


  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
  </div>

  <script src="plugins/jquery.js"></script>
  <script src="plugins/bootstrap.min.js"></script>
  <script src="plugins/bootstrap-select.min.js"></script>
  <!-- Slick Slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- FancyBox -->
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <script src="plugins/validate.js"></script>
  <script src="plugins/wow.js"></script>
  <script src="plugins/jquery-ui.js"></script>
  <script src="plugins/timePicker.js"></script>
  <script src="js/script.js"></script>
</body>

</html>