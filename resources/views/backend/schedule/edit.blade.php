@extends('backend.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Schedule</h1>
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
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                      placeholder="Masukan Nama Kategori">
                  </div>
                  {{-- form week --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Week</label>
                    <select name="week" class="form-control" id="exampleInputEmail1">
                      <option value="">Pilih Hari</option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jumat</option>
                      <option value="Sabtu">Sabtu</option>
                      <option value="Minggu">Minggu</option>
                    </select>
                  </div>
                  {{-- form week --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Time</label>
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
                  <button type="submit" class="btn btn-primary">Submit</button>
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
