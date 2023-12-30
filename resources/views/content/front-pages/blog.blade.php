@extends('layouts.frontend')

@section('content')
<div class="vs-wave-shape style2 bg-smoke">
  <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
  </svg>
</div>
<!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
      <div class="container">
          <div class="row gx-40">
              <div class="col-lg-8">
                @if(count($daftar_blog) > 0)
                @foreach($daftar_blog as $blog)
                  <div class="vs-blog blog-single has-post-thumbnail">
                      <div class="blog-img">
                          {{-- <a href="blog-details.html"><img src="assets/img/blog/blog-single-1-1.jpg" alt="Blog Image"></a> --}}
                          <a href="{{route('home.blog.detail', $blog->slug)}}"><img src="{{Storage::url($blog->foto)}}" alt="Blog Image"></a>
                      </div>
                      <div class="blog-content">
                          <div class="blog-meta">
                              <a href="{{route('home.blog.detail', $blog->slug)}}"><i class="far fa-calendar-alt"></i>{{date_format($blog->created_at, 'd M Y')}}</a>
                              <span><i class="far fa-comment-alt-dots"></i>15</span>
                          </div>
                          <h2 class="blog-title"><a href="{{route('home.blog.detail', $blog->slug)}}">{{$blog->judul}}</a></h2>
                          <p class="blog-text">{{$blog->abstrak}}</p>
                          <a href="{{route('home.blog.detail', $blog->slug)}}" class="vs-btn style2">Baca Selengkapnya</a>
                      </div>
                  @endforeach
                  @else
                  <h4 class="text-center">Blog Kosong</h4>
                  @endif
                  </div>

                  {{-- <div class="vs-blog blog-single">
                      <div class="blog-content">
                          <div class="blog-meta">
                              <a href="blog.html"><i class="far fa-calendar-alt"></i>December 3, 2022</a>
                              <span><i class="far fa-comment-alt-dots"></i>15</span>
                          </div>
                          <h2 class="blog-title"><a href="blog-details.html">A very warm welcome to our new Treasurer</a></h2>
                          <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididunt ut la bore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididunt ut la bore et dolore magna aliqua.</p>
                          <a href="blog-details.html" class="vs-btn style2">Read More</a>
                      </div>
                  </div> --}}

                  {{-- <div class="vs-pagination  ">
                      <a href="#" class="pagi-btn">Prev</a>
                      <ul>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">...</a></li>
                          <li><a href="#">12</a></li>
                      </ul>
                      <a href="#" class="pagi-btn">next</a>
                  </div> --}}
              </div>


              <div class="col-lg-4">
                  <aside class="sidebar-area">
                      <div class="widget widget_search   ">
                          <h3 class="widget_title">Search</h3>
                          <form class="search-form">
                              <input type="text" placeholder="Search Here">
                              <button type="submit"><i class="far fa-search"></i></button>
                          </form>
                      </div>
                      <div class="widget  ">
                        <h3 class="widget_title">Latest News</h3>
                        <div class="recent-post-wrap">
                          @if(count($daftar_blog) > 0)
                          @foreach($daftar_blog as $blog)
                            <div class="recent-post">
                                <div class="media-img">
                                    {{-- <a href="blog-details.html"><img src="{{asset('frontend/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a> --}}
                                    <a href="{{route('home.blog.detail', $blog->id)}}"><img src="{{Storage::url($blog->foto)}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar-alt"></i>{{date_format($blog->created_at, 'd M Y')}}</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">{{$blog->judul}}</a></h4>
                                </div>
                            </div>
                          @endforeach
                          @else
                            <div class="recent-post">
                              <p class="text-center">Blog Kosong</p>
                            </div>

                          @endif
                          </div>
                    </div>
                      <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                          @foreach($daftar_kategori as $kategori)
                            <li>
                                <a href="blog.html">{{$kategori->nama}}</a>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                    <div class="widget  ">
                      <h4 class="widget_title">Photos Gallery</h4>
                      <div class="sidebar-gallery">
                          <div class="gallery-thumb">
                              <img src="{{asset('gallery/gallery-small-01.jpg')}}" alt="Gallery Image" class="w-100">
                              <a href="{{asset('gallery/gallery-small-01.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                          </div>
                          <div class="gallery-thumb">
                              <img src="{{asset('gallery/gallery-small-02.jpg')}}" alt="Gallery Image" class="w-100">
                              <a href="{{asset('gallery/gallery-small-02.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                          </div>
                          <div class="gallery-thumb">
                              <img src="{{asset('gallery/gallery-small-03.jpg')}}" alt="Gallery Image" class="w-100">
                              <a href="{{asset('gallery/gallery-small-03.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                          </div>
                          <div class="gallery-thumb">
                              <img src="{{asset('gallery/gallery-small-04.jpg')}}" alt="Gallery Image" class="w-100">
                              <a href="{{asset('gallery/gallery-small-04.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                          </div>
                          <div class="gallery-thumb">
                              <img src="{{asset('gallery/about-us-02.jpg')}}" alt="Gallery Image" class="w-100">
                              <a href="{{asset('gallery/about-us-02.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                          </div>
                          <div class="gallery-thumb">
                              <img src="{{asset('gallery/404770181_326955203610503_6004865518562258046_n.jpg')}}" alt="Gallery Image" class="w-100">
                              <a href="{{asset('gallery/404770181_326955203610503_6004865518562258046_n.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="widget  ">
                    <h3 class="widget_title">Video</h3>
                    <div class="vs-video-widget">
                        <div class="video-thumb mega-hover">
                            <img src="{{asset('frontend/img/blog/intro-video-thumb.jpg')}}" alt="Video Thumb" class="w-100">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video position-center"><i class="fas fa-play"></i></a>
                        </div>
                        <h4 class="video-title h5"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="text-inherit popup-video">A very warm welcome to our new Treasurer</a></h4>
                    </div>
                </div>
                <div class="widget widget_tag_cloud   ">
                    <h3 class="widget_title">Upcoming Events</h3>
                    <div class="vs-event-widget">
                        <div class="recent-event">
                            <a href="event-details.html" class="event-date"><span class="month">Dec</span>24</a>
                            <div class="media-body">
                                <h4 class="event-title"><a href="event-details.html" class="text-inherit">Father`s Day Sundaes & Shaving!</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget bg-vs-secondary  " data-bg-src="{{asset('frontend/img/bg/widget-bg-1-1.png')}}">
                  <h4 class="mt-n2 text-white">Pendaftaran Masih Dibuka !</h4>
                  <p class="mb-4 pb-1 text-white">Kami masih membuka pendaftaran sampai tanggal 29 Februari 2024.</p>
                  <a href="{{route('home.daftar')}}" class="vs-btn">Daftarkan Anak Segera</a>
              </div>
                  </aside>
              </div>
          </div>
      </div>
  </section>
@endsection
