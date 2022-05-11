@extends('backend.master')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Blog</li>
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
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                          placeholder="Judul Artikel">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        {{-- <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                          placeholder="Judul Artikel"> --}}
                        <select name="category" class="form-control select2" style="width: 100%;">
                          <option selected="selected" value="">Choose</option>
                          @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        {{-- <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                          placeholder="Judul Artikel"> --}}
                        <select name="status" class="form-control select2" style="width: 100%;">
                          <option selected="selected" value="">choose</option>
                          <option value="0">Pending</option>
                          <option value="2">Save</option>
                          <option value="1">Publish</option>
                          {{-- @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach --}}
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Short Description</label>
                      <textarea name="short_description" class="form-control" id="exampleInputEmail1" placeholder="Isi Artikel"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Content</label>
                      <textarea class="isiArtikel @error('content') is-invalid @enderror" name="content"
                        style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      @error('detail')
                        <div class="alert alert-danger mt-2">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>


                </div>
                <!-- /.card-body -->

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

@section('scriptJs')
  <!-- Summernote -->
  <script src="{{ asset('asset/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <script>
    $(function() {
      //note
      $('.isiArtikel').summernote()
    })
  </script>
@endsection

@section('scriptCss')
  <!-- Summernote -->
  <link rel="stylesheet" href="{{ asset('asset/backend/plugins/summernote/summernote-bs4.css') }}">
@endsection
