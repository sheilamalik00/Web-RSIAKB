@extends('frontend.master')

@section('content')
  <!--Page Title-->
  <section class="page-title text-center" style="background-image:url({{asset('asset/frontend/images/background/3.jpg')}});">
    <div class="container">
      <div class="title-text">
        <h1>Blog</h1>
        <ul class="title-menu clearfix">
          <li>
            <a href="index.html">Beranda &nbsp;/</a>
          </li>
          <li>Blog</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->

  <!-- Contact Section -->
  <section class="blog-section style-four section">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="left-side">
              @foreach ($blogList as $item)
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="item-holder">
                <div class="image-box">
                  <figure>
                    <a href="{{route('blog.show',$item->slug)}}">
                        <img src="{{asset('/storage/blog/',$item->image)}}" alt="">
                    </a>
                  </figure>
                </div>
                <div class="content-text">
                  <a href="{{route('blog.show',$item->slug)}}">
                    <h6>{{$item->title}}</h6>
                  </a>
                  <span>By Admin / {{$item->get_date_created()}}</span>
                  <p>{{$item->short_description}}</p>
                  <div class="link-btn">
                    <a href="{{route('blog.show',$item->slug)}}" class="btn-style-one">read more</a>
                  </div>
                </div>
              </div>
              </div>

              @endforeach
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="right-side">
            <div class="text-title">
              <h6>Search</h6>
            </div>
            <div class="search-box">
              <form method="post" action="index.html">
                <input type="search" name="search" placeholder="Enter to Search" required="">
              </form>
            </div>
            <div class="categorise-menu">
              <div class="text-title">
                <h6>Categories</h6>
              </div>
              <ul class="categorise-list">
                @foreach ($category as $item)
                <li><a href="#">{{$item->name}} <span>({{$item->get_blog->count()}})</span></a></li>
                @endforeach
              </ul>
            </div>
            <div class="tag-list">
              {{-- <div class="text-title">
                <h6>Tags</h6>
              </div> --}}
              {{-- <a href="#">ray</a><a href="#">dental</a>
              <a href="#">Clean</a><a href="#">hospitality</a>
              <a href="#">Dormamu</a><a href="#">Medical</a><a href="#">hospitality</a> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="styled-pagination">
          {{$blogList->links('frontend.tools.paginate')}}
        {{-- <ul>
          <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
          <li><a href="#" class="active">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
        </ul> --}}
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
@endsection
