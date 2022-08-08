@extends('backend.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Jadwal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.schedule.update',$schedule->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <select name="doctor_id" class="form-control" id="exampleInputEmail1">
                      <option value="">Pilih Dokter</option>
                        @foreach ($doctor as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $schedule->doctor_id)
                                selected

                            @endif>{{ $item->name }} ({{$item->get_specialist_doctor->name}})</option>
                        @endforeach
                    </select>
                  </div>
                  {{-- form week --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hari</label>
                    <select name="schedule_day" class="form-control" id="exampleInputEmail1">
                        <option value="{{$schedule}}"
                        <option value="">Choose Day</option>
                      {{-- English Day --}}
                        <option value="Monday">Senin</option>
                        <option value="Tuesday">Selasa</option>
                        <option value="Wednesday">Rabu</option>
                        <option value="Thursday">Kamis</option>
                        <option value="Friday">Jumat</option>
                        <option value="Saturday">Sabtu</option>
                        <option value="Sunday">Minggu</option>
                        {{-- English Day --}}
                    </select>
                  </div>
                  {{-- form week --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam</label>
                    <div class="row">
                      <div class="col-md-6">
                        Waktu Mulai
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                          </div>
                          <input name="time_first" type="time" class="form-control float-right" id="exampleInputEmail1"
                            placeholder="Masukan Waktu">
                        </div>
                      </div>
                      <div class="col-md-6">
                          Waktu Selesai
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                          </div>
                          <input name="time_last" type="time" class="form-control float-right" id="exampleInputEmail1"
                            placeholder="Masukan Waktu">
                        </div>
                      </div>
                    </div>

                    {{-- <input name="time" type="time" class="form-control" id="exampleInputEmail1" placeholder="Masukan Waktu"> --}}
                  </div>
                </div>
                <!-- /.card-body -->

                {{-- form week --}}

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
