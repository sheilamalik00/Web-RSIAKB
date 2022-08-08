@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url({{asset('asset/frontend/tambahan/layanan.jpg')}});">
    <div class="container">
      <div class="title-text">
        <h1>Kontak Kami</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Kontak Kami</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <!--==================================
  =            Contact Form            =
  ===================================-->
  <section class="section contact">
    <!-- container start -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- address start -->
          <div class="address-block">
            <!-- Location -->
            <div class="media">
              <i class="fa fa-map-o"></i>
              <div class="media-body">
                <h3>Lokasi</h3>
                <p>Jl. Aria Santika No.28, RT.003/RW.003, Margasari, Kec. Karawaci
                  <br>Kota Tangerang, Banten 15114
                </p>
              </div>
            </div>
            <!-- Phone -->
            <div class="media">
              <i class="fa fa-phone"></i>
              <div class="media-body">
                <h3>Telepon</h3>
                <p>
                  021-5520356
                  <br>021-5522303
                </p>
              </div>
            </div>
            <!-- Email -->
            <div class="media">
              <i class="fa fa-envelope-o"></i>
              <div class="media-body">
                <h3>E-Mail</h3>
                <p>
                  rsiakaruniabunda@yahoo.com
                </p>
              </div>
            </div>
          </div>
          <!-- address end -->
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <!-- contact form start -->
            <form action="#" class="row">
              <!-- name -->
              <div class="col-md-6">
                <input type="text" name="name" class="form-control main" placeholder="Nama" required>
              </div>
              <!-- email -->
              <div class="col-md-6">
                <input type="email" class="form-control main" placeholder="E-Mail" required>
              </div>
              <!-- phone -->
              <div class="col-md-12">
                <input type="text" class="form-control main" placeholder="Telepon" required>
              </div>
              <!-- message -->
              <div class="col-md-12">
                <textarea name="message" rows="15" class="form-control main" placeholder="Pesan"></textarea>
              </div>
              <!-- submit button -->
              <div class="col-md-12 text-right">
                <button class="btn btn-style-one" type="submit">Kirim</button>
              </div>
            </form>
            <!-- contact form end -->
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!--====  End of Contact Form  ====-->

  <!--================================
  =            Google Map            =
  =================================-->
  <section class="map">
    <div class="map">
      <div id="google_map" class="google_map">
        <div class="map_container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6462747425735!2d106.61268731413713!3d-6.178082062256586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff25d6470387%3A0x93d65c9ff9574612!2sRSIA%20KARUNIA%20BUNDA!5e0!3m2!1sen!2sid!4v1646316543284!5m2!1sen!2sid"
            width="1350" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!--====  End of Google Map  ====-->
@endsection
