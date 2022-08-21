@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center"
    style="background-image:url({{ asset('asset/frontend/tambahan/Dokterkami.jpg') }});">
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

  <section class="service-section bg-gray section">
    <div class="container">
      <div class="section-title text-center">
        <h3>Jadwal
          <span>Dokter</span>
        </h3>
        {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque
          <br>
          fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!
        </p> --}}
      </div>
      <div class="row clearfix">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <section class="team-section section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3>Dokter Terbaik
              {{-- <span>Kami</span> --}}
            </h3>
            {{-- <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
              <br>iews. Iterative approaches to corporate strategy... --}}
            </p>
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
                        @if ($itemDoctor->image == null)
                          {{-- images/doctor.svg --}}
                          <img style="max-height: 275px; max-width:100%"
                            src="{{ asset('asset/frontend/images/doctor.svg') }}" alt="doctor" class="img-responsive">
                        @else
                          <img style="max-height: 275px; max-width:100%"
                            src="{{ Storage::url('public/doctor/') . $itemDoctor->image }}" alt="doctor"
                            class="img-responsive">
                        @endif
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
