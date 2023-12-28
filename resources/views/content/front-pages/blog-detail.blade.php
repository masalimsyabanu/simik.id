@extends('layouts.frontend')

@section('content')
<div class="vs-wave-shape style2 bg-smoke">
  <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
  </svg>
</div>
<!--==============================
    Blog Details Area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
      <div class="container">
          <div class="row gx-40">
              <div class="col-lg-8">
                @foreach($blog as $object)
                  <div class="vs-blog blog-single">
                      <div class="blog-img">
                          <img src="{{asset('frontend/img/blog/blog-single-1-1.jpg')}}" alt="Blog Image">
                          {{-- <img src="{{Storage::url($object->foto)}}" alt="Blog Image"> --}}
                      </div>
                      <div class="blog-content">
                          <div class="blog-meta">
                              <a href="blog.html"><i class="far fa-calendar-alt"></i>{{ date_format($object->created_at, 'd M Y') }}</a>
                              <span><i class="far fa-comment-alt-dots"></i>15</span>
                          </div>
                          <h2 class="blog-title">{{$object->judul}}</h2>
                          {!! $object->konten !!}
                      </div>

                      @endforeach


                      <div class="share-links clearfix  ">
                          <div class="row justify-content-between">
                              <div class="col-xl-auto">
                                  <span class="share-links-title">Tags:</span>
                                  <div class="tagcloud">
                                      <a href="blog.html">kindergarten</a>
                                      <a href="blog.html">Pre-School</a>
                                      <a href="blog.html">Classes</a>
                                  </div>
                              </div>
                              <div class="col-xl-auto text-xl-end">
                                  <span class="share-links-title">Share:</span>
                                  <ul class="social-links">
                                      <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                  </ul><!-- End Social Share -->
                              </div><!-- Share Links Area end -->
                          </div>
                      </div>
                      <div class="blog-author  ">
                          <div class="media-img">
                              <img src="{{asset('frontend/img/blog/blog-author.jpg')}}" alt="Blog Author Image">
                          </div>
                          <div class="media-body">
                              <p class="author-degi">Written by</p>
                              <h3 class="author-name h4"><a class="text-inherit" href="team-details.html">Hasmine Yulk</a></h3>
                              <p class="author-text">Monotonectally procrastinate transparent architectures before robust opportunities. Progressively parallel task 24/365 mindshare and multimedia based e-markets.</p>
                          </div>
                      </div>
                      <div class="vs-comments-wrap   ">
                          <h2 class="blog-inner-title">3 Comments</h2>
                          <ul class="comment-list">
                              <li class="vs-comment-item">
                                  <div class="vs-post-comment">
                                      <div class="comment-avater">
                                          <img src="{{asset('frontend/img/blog/comment-author-1.jpg')}}" alt="Comment Author">
                                      </div>
                                      <div class="comment-content">
                                          <h4 class="name h4">Rosalina Kelian</h4>
                                          <span class="commented-on"><i class="fal fa-calendar-alt"></i> 22 April, 2022</span>
                                          <p class="text">Progressively procrastinate mission-critical action items before team building ROI. Interactively provide access to cross functional quality vectors for client</p>
                                          <div class="reply_and_edit">
                                              <a href="blog-details.html" class="replay-btn">Replay</a>
                                          </div>
                                      </div>
                                  </div>
                                  <ul class="children">
                                      <li class="vs-comment-item">
                                          <div class="vs-post-comment">
                                              <div class="comment-avater">
                                                  <img src="{{asset('frontend/img/blog/comment-author-2.jpg')}}" alt="Comment Author">
                                              </div>
                                              <div class="comment-content">
                                                  <h4 class="name h4">John Deo</h4>
                                                  <span class="commented-on"><i class="fal fa-calendar-alt"></i> 23 April, 2022</span>
                                                  <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets.</p>
                                                  <div class="reply_and_edit">
                                                      <a href="blog-details.html" class="replay-btn">Replay</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </li>
                              <li class="vs-comment-item">
                                  <div class="vs-post-comment">
                                      <div class="comment-avater">
                                          <img src="{{asset('frontend/img/blog/comment-author-3.jpg')}}" alt="Comment Author">
                                      </div>
                                      <div class="comment-content">
                                          <h4 class="name h4">Tara sing</h4>
                                          <span class="commented-on"><i class="fal fa-calendar-alt"></i> 26 April, 2022</span>
                                          <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets whereas 2.0 users.</p>
                                          <div class="reply_and_edit">
                                              <a href="blog-details.html" class="replay-btn">Replay</a>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div><!-- Comment Form -->
                      <div class="vs-comment-form  ">
                          <div id="respond" class="comment-respond">
                              <div class="form-title">
                                  <h3 class="blog-inner-title">Leave a Comment</h3>
                                  <p class="form-text">Your email address will not be published. Required fields are marked*</p>
                              </div>
                              <div class="row gx-20">
                                  <div class="col-md-6 form-group">
                                      <input type="text" class="form-control" placeholder="Complete Name">
                                  </div>
                                  <div class="col-md-6 form-group">
                                      <input type="email" class="form-control" placeholder="Email Address">
                                  </div>
                                  <div class="col-12 form-group">
                                      <textarea class="form-control" placeholder="Comment"></textarea>
                                  </div>
                                  <div class="col-12 ">
                                      <div class="custom-checkbox notice">
                                          <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                          <label for="wp-comment-cookies-consent"> Save my name, email, and website in this browser for the next time I comment.</label>
                                      </div>
                                  </div>
                                  <div class="col-12 form-group mb-0">
                                      <button class="vs-btn">Post Comment</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
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
                                  <img src="{{asset('frontend/img/widget/gal-1-1.jpg')}}" alt="Gallery Image" class="w-100">
                                  <a href="{{asset('frontend/img/widget/gal-1-1.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                              </div>
                              <div class="gallery-thumb">
                                  <img src="{{asset('frontend/img/widget/gal-1-2.jpg')}}" alt="Gallery Image" class="w-100">
                                  <a href="{{asset('frontend/img/widget/gal-1-2.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                              </div>
                              <div class="gallery-thumb">
                                  <img src="{{asset('frontend/img/widget/gal-1-3.jpg')}}" alt="Gallery Image" class="w-100">
                                  <a href="{{asset('frontend/img/widget/gal-1-3.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                              </div>
                              <div class="gallery-thumb">
                                  <img src="{{asset('frontend/img/widget/gal-1-4.jpg')}}" alt="Gallery Image" class="w-100">
                                  <a href="{{asset('frontend/img/widget/gal-1-4.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                              </div>
                              <div class="gallery-thumb">
                                  <img src="{{asset('frontend/img/widget/gal-1-5.jpg')}}" alt="Gallery Image" class="w-100">
                                  <a href="{{asset('frontend/img/widget/gal-1-5.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
                              </div>
                              <div class="gallery-thumb">
                                  <img src="{{asset('frontend/img/widget/gal-1-6.jpg')}}" alt="Gallery Image" class="w-100">
                                  <a href="{{asset('frontend/img/widget/gal-1-6.jpg')}}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
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
                              <div class="recent-event">
                                  <a href="event-details.html" class="event-date"><span class="month">Dec</span>24</a>
                                  <div class="media-body">
                                      <h4 class="event-title"><a href="event-details.html" class="text-inherit">Father`s Day Sundaes & Shaving!</a></h4>
                                  </div>
                              </div>
                              <div class="recent-event">
                                  <a href="event-details.html" class="event-date"><span class="month">Dec</span>24</a>
                                  <div class="media-body">
                                      <h4 class="event-title"><a href="event-details.html" class="text-inherit">Father`s Day Sundaes & Shaving!</a></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="widget bg-vs-secondary  " data-bg-src="{{asset('frontend/img/bg/widget-bg-1-1.png')}}">
                          <h4 class="mt-n2 text-white">Join together to make amazing things happen</h4>
                          <p class="mb-4 pb-1 text-white">Get all the latest information, support and guidance about the cost of living with kindergarten.</p>
                          <a href="registration.html" class="vs-btn">Start Registration</a>
                      </div>
                  </aside>
              </div>
          </div>
      </div>
  </section>

@endsection
