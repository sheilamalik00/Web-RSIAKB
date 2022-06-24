@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
      <div class="title-text">
        <h1>Layanan</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Layanan</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <!--team section-->
  <section class="team-section section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Pelayanan di RSIA Karunia Bunda
          <span>Kami</span>
        </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
          <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="team-member">
            <div class="contents">
              <h4 class="text-center">Pelayanan Medis</h4>
              <p>
                1. Poli Kebidanan dan Kandungan <br />
                2. Poli Anak <br />
                3. Poli Penyakit Dalam <br />
                4. Polik Bedah <br />
                5. Poli Gizi
              </p>
              {{-- <a href="#" class="btn btn-main">read more</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="team-member">
            <div class="contents">
              <h4 class=" text-center">Spesialis Pelayanan medis</h4>
              <p>
                1. Spesialis anestesi<br />
                2. Spesialis radiologi<br />
                3. Spesialis patologi klinik<br />
                4. Spesialis patologi anatomi<br />
              </p>
              {{-- <a href="#" class="btn btn-main">read more</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End team section-->
  <section class="service-overview section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="content-block">
            <h2>Sarana dan <br>Prasarana</h2>
            <p>1).Instalasi rawat jalan,<br />
              Termasuk di dalamnya Poli Kebidanan dan Kandungan , Poli Anak, Poli Penyakit
              Dalam, Polik Bedah dan Poli Gizi
              <br />
              2). Unit Gawat Darurat<br />
              Merupakan unit pelayanan 24 jam. Unit ini menggunakan sistem triage dengan
              membagi pasien menjadi 3 label; label hijau untuk pasien yang memerlukan
              penanganan dan perhatian dokter namun tidak darurat, label kuning untuk pasien
              stabil yang memerlukan perawatan rumah sakit serta pengawasan dan re-triage
              berkala oleh tenaga medis terlatih, dan label merah untuk pasien yang memerlukan
              tindakan bedah segara atau tatalaksana lain untuk mempertahankan hidupnya.<br />
              3). ICU<br />
              4). HCU<br />
              5). Ruang Isolasi<br />
              6). Perina<br />
              7). Kamar Operasi<br />
              8). Ruang Bersalin<br />
              9). Ruang Pemulihan Pasca Operasi / RR<br />
              10). Laboratorium<br />
              11). Instalasi Farmasi<br />
              12). Unit Radiologi<br />
              13). Dapur<br />
              14). Ruang Tunggu<br />
              Tersedia ± 30 tempat duduk yang tersebar, 1 mesin Anjungan Pendaftaran Mandiri
              (APM), TV monitor info antrean pasien, jadwal dokter serta ketersediaan tempat tidur
              dan info edukasi pasien.<br />
              15). Ruang Pojok ASI<br />
              16). Ruang sterilisasi<br />
              17). Ruang Instalasi Pemeliharaan Sarana dan Prasarana RS / IPSRS<br />
              18). Ruang Laundry<br />
              19). Aula / Ruang Serba Guna<br />
              20). Musholla<br />
              21). Tempat Pengelolaan / TPS Limbah Medis<br />
              22). Instalasi Pengolahan Air Limbah (IPAL)<br />
              23). Ruang Pemulsaan Jenazah<br />
              24). Ambulans<br />
            </p>
            {{-- <ul>
              <li><i class="fa fa-caret-right"></i>vitae laboriosam explicabo eligendi sapiente</li>
              <li><i class="fa fa-caret-right"></i>consectetur adipisicing elit. Beatae</li>
              <li><i class="fa fa-caret-right"></i>dolorum esse tempora id architecto</li>
              <li><i class="fa fa-caret-right"></i>optio repellendus quasi nisi vitae</li>
            </ul> --}}
            {{-- <a href="#" class="btn btn-style-one">Appoint</a> --}}
          </div>
        </div>
        <div class="col-md-6">
          <div class="accordion-section">
            <div class="accordion-holder">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        VIP
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      Kamar ukuran 4 x 6 m<br />
                      1 buah tempat tidur<br />
                      1 Bel Pasien<br />
                      1 buah AC<br />
                      1 buah TV LCD<br />
                      1 set sofa<br />
                      1 buah meja pasien kecil<br />
                      1 buah kulkas 1 pintu<br />
                      1 buah lemari pakaian<br />
                      1 kamar mandi dengan shower<br />
                      shower yang dilengkapi water<br />
                      heater, toilet dan wastafel<br />
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Kelas I
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      2 buah tempat tidur<br />
                      2 Kursi Pasien<br />
                      2 buah lemari pakaian<br />
                      2 Bel Pasien<br />
                      1 buah AC<br />
                      1 buah TVLCD<br />
                      1 kamar mandi dengan shower<br />
                      shower yang dilengkapi water<br />
                      heater, toilet dan wastafel<br />
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Kelas II
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      3 buah tempat tidur<br />
                      3 Kursi Pasien<br />
                      3 buah lemari pakaian<br />
                      3 Bel pasien<br />
                      1 buah AC<br />
                      1 buah TV LCD<br />
                      1 kamar mandi dan wastafel<br />
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Kelas III
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                      6 buah tempat tidur<br/>
                      6 Kursi Pasien<br/>
                      6 buah lemari pakaian<br/>
                      6 Bel pasien<br/>
                      2 buah AC<br/>
                      1 buah TVLCD<br/>
                      1 kamar mandi dan wastafel<br/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="service-box col-md-12">
          <div class="row">
            <div class="col-md-6">
              <img class="img-responsive" src="images/services/service-one.jpg" alt="service-image">
            </div>
            <div class="col-md-6">
              <div class="contents">
                <div class="section-title">
                  <h3>pulmonary</h3>
                </div>
                <div class="text">
                  <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic
                    is added.
                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                  <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic
                    is added.
                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                </div>
                <ul class="content-list">
                  <li>
                    <i class="fa fa-check-circle-o"></i>Whitening is among the most popular dental
                  </li>
                  <li>
                    <i class="fa fa-check-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                  </li>
                  <li>
                    <i class="fa fa-check-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                  </li>
                </ul>
                <a href="#" class="btn btn-style-one">Read more</a>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  <!--Service Section-->
  {{-- <section class="service-section bg-gray section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Provided
          <span>Services</span>
        </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
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
  </section> --}}
  <!--End Service Section-->
@endsection
