<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <h6>Hubungi Kami</h6>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Jl. Aria Santika No.28, RT.003/RW.003, Margasari, Kec. Karawaci, Kota Tangerang, Banten 15114</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>rsiakaruniabunda@yahoo.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>021-5520356</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Layanan</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gawat Darurat/HCU/ICU</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Poli</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Laboratorium & Radiologi</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Farmasi</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Perinatologi</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Informasi Terkini</h6>
            <ul>
                @foreach ($blog as $item)

                <li class="item">
                  <div class="media">
                    <div class="media-left">
                      <a href="{{route('blog.show',$item->slug)}}">
                        @if($item->image==null)
                        <img class="media-object" src="{{asset('asset/frontend/images/blog/no-image.jpg')}}" width="40px" height="40px" alt="post-thumb">
                        @else
                        <img class="media-object" src="{{Storage::url('public/blog/').$item->image}}" alt="post-thumb">
                        @endif
                    </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="{{route('blog.show',$item->slug)}}">{{$item->title}}</a></h4>
                      <p>{{$item->short_description}}</p>
                    </div>
                  </div>
                </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2022. All Rights Reserved by
          <a href="index.html">RSIA Karunia Bunda</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="{{route('home.index')}}">Beranda</a>
        </li>
        <li>
          <a href="{{route('about.index')}}">Tentang Kami</a>
        </li>
        <li>
          <a href="{{route('contact.index')}}">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->
