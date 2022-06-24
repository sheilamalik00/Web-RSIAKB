@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
      <div class="title-text">
        <h1>Dokter Kami</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Dokter Kami</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <section class="team-section section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3>Dokter 
              <span>Kami</span>
            </h3>
          </div>
          <!-- Nav tabs -->
          <div class="tabs">
            <ul class="nav nav-tabs" role="tablist">
              @foreach ($specialist as $index => $item)
                <li role="presentation" class="{{ $index == 0 ? 'active' : '' }}">
                  <a href="#{{ $item->id }}" data-toggle="tab">{{ $item->name }}</a>
                </li>
              @endforeach

            </ul>
          </div>
          <div class="tab-content">
            <!--Start single tab content-->
            @foreach ($specialist as $index => $item)
              <div class="team-members tab-pane fade in {{ $index == 0 ? 'active' : '' }} row" id="{{ $item->id }}">
                @forelse ($doctor as $itemDoctor)
                  @if ($item->id == $itemDoctor->specialist_doctor_id)
                    <div class="col-md-4 col-sm-6">
                      <div class="team-person text-center">
                        <img src="{{ asset('/storage/doctor/', $itemDoctor->image) }}" class="img-responsive"
                          alt="team">
                        <h6>{{ $itemDoctor->name }}</h6>
                        <p>{{ $item->name }}</p>
                      </div>
                    </div>
                  @endif
                @empty
                @endforelse
              </div>
            @endforeach
            <!--End single tab content--
                <!--End single tab content-->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
