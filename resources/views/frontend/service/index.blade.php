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

  <section class="service-overview section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="content-block">
            <h2>Poli Kebidanan & <br>Kandungan</h2>
            <p>Poliklinik yang bertujuan untuk membantu pasien dengan kasus yang berhubungan dengan kehamilan dan penyakit kandungan
            </p>
            <a href="#" class="btn btn-style-one">Daftar Dokter</a>
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
                        Apakah RSIA Karunia Bunda menerima pasien umum, BPJS dan asuransi?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                    Ya, RSIA Karunia Bunda menerima pasien umum, pasien BPJS dan pasien peserta asuransi yag telah bekerja sama
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
                    <ol>
                        <li>Surat rujukan asli beserta fotocopy 2 lembar</li>
                        <li>Surat kontrol asli</li>
                        <li>Kartu BPJS asli dan fotocopy 2 lembar</li>
                        <li>KTP asli dan fotocopy 2 lembar</li>
                        <li>Fotocopy KK 2 lembar</li>
                      </ol>
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
        <div class="service-box col-md-12">
          <div class="row">
            <div class="col-md-6">
              <img class="img-responsive" src="images/services/service-one.jpg" alt="service-image">
            </div>
            <div class="col-md-6">
              <div class="contents">
                <div class="section-title">
                  <h3>Poli Spesialis Anak</h3>
                </div>
                <div class="text">
                  <p>Layanan pemeriksaan dan pengobatan terhadap bayi dan anak sakit oleh Dokter Spesialis Anak yang meliputi:</p>
                  <ul>
                    <li>Pemeriksaan Kesehatan Anak</li>
                    <li>Pemeriksaan Tumbuh Kembang</li>
                    <li>Imunisasi</li>
                  </ul>
                </div>
                <a href="#" class="btn btn-style-one">Daftar Dokter</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Service Section-->
  <section class="service-section bg-gray section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Layanan
          <span>Penunjang</span>
        </h3>
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
              <a href="service.html">
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
@endsection
