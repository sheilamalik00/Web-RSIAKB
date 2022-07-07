@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center"
    style="background-image:url({{ asset('asset/frontend/images/background/3.jpg') }});">
    <div class="container">
      <div class="title-text">
        <h1>Buat Janji Temu</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Buat Janji Temu</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <!-- Contact Section -->
  <section class="blog-section section style-three pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="contact-area">
            <div class="section-title">
              <h3>Request
                <span>Janji Temu</span>
              </h3>
            </div>
            <form name="contact_form" class="default-form contact-form" action="{{route('appointment.store')}}" method="POST">
                @csrf
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
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="appointment-image-holder">
            <figure>
              <img src="{{ asset('asset/frontend/images/background/appoinment.jpg') }}" alt="Appointment">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!--team section-->
  <section class="team-section section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Dokter Terbaik
          {{-- <span>Kami</span> --}}
        </h3>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
          <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?
        </p> --}}
      </div>
      <div class="row">
        @foreach ($dokter as $item)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="{{$item->get_image()}}" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>{{$item->name}}</h4>
                <p>{{$item->get_specialist_doctor->name}}</p>
                {{-- <a href="#" class="btn btn-main">read more</a> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--End team section-->
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
