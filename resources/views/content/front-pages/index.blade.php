@extends('layouts.frontend')


@section('content')

<!--============================
Hero Area
==============================-->
<section class="vs-hero-wrapper">
  <div class="vs-hero-carousel" data-height="1050" data-container="1900" data-slidertype="responsive" data-globalbgcolor="#2DA0A4">
    @if(count($daftar_slider) > 0)
    @foreach($daftar_slider as $slider)
      <!-- Slide 1-->
      <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
          <img width="1920" height="295" src="frontend/img/hero/h-s-2-2.png" class="ls-l ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:775px; left:-10px; -webkit-background-clip:border-box;" data-ls="static:forever;">
          <img width="708" height="710" src="{{Storage::url($slider->foto)}}" class="ls-l ls-hide-phone ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:123px; left:830px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
          <img width="552" height="616" src="frontend/img/hero/h-s-2-1.png" class="ls-l ls-hide-phone ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:170px; left:1171px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;">
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:70px; font-weight:600; left:310px; top:305px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">
            @php
            $pos = 2;
            $string  = $slider->judul;
            $words = explode(" ", $string);
            array_splice( $words, $pos, 0, '<br>' );
            $new_string = join(" ",$words);
            // echo $new_string;
            @endphp

            {!!$new_string!!}
          </h1>
          {{-- <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:70px; font-weight:600; left:310px; top:374px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">
              Children Care
          </h1>
          <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:70px; font-weight:600; left:310px; top:445px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">
              Program
          </h1> --}}
          <p style="font-size:24px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:315px; top:535px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:800; easingin:easeOutQuint;">{{$slider->deskripsi}} </p>
          {{-- <p style="font-size:24px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:315px; top:573px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:900; easingin:easeOutQuint;">laboriosam error nulla aut.</p> --}}

          <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:315px; top:642px; font-family:'Fredoka', sans-serif; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{$slider->url}}" class="vs-btn">Lihat Selengkapnya</a></div>
          <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:90px; font-weight:600; left:150px; top:149px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">
            {!!$new_string!!}
          </h1>
          {{-- <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:90px; font-weight:600; left:150px; top:245px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">
              Children Care
          </h1>
          <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:90px; font-weight:600; left:150px; top:351px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">
              Program
          </h1> --}}
          <p style="font-size:34px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:150px; top:477px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:800; easingin:easeOutQuint;">{{$slider->deskripsi}} </p>
          {{-- <p style="stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:150px; top:538px; font-size:34px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:900; easingin:easeOutQuint;">laboriosam error nulla aut.</p> --}}

          <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:150px; top:630px; font-family:'Fredoka', sans-serif; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{$slider->url}}" class="vs-btn">Lihat Selengkapnya</a></div>
          <h1 style="stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:110px; font-weight:600; left:100px; top:90px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">
            {!!$new_string!!}
          </h1>
          {{-- <h1 style="stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:110px; font-weight:600; left:100px; top:236px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">
              Children Care
          </h1>
          <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:110px; font-weight:600; left:100px; top:380px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">
              Program
          </h1> --}}
          <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100px; top:578px; font-family:'Fredoka', sans-serif; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{$slider->url}}" class="vs-btn">Lihat Selengkapnya</a></div>
          <img width="708" height="710" src="{{Storage::url($slider->foto)}}" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:47px; left:1003px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
          <img width="552" height="616" src="frontend/img/hero/h-s-2-1.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:76px; left:1340px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;">
      </div>
      @endforeach
      @else
        <!-- Slide 1-->
      <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
        <img width="1920" height="295" src="frontend/img/hero/h-s-2-2.png" class="ls-l ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:775px; left:-10px; -webkit-background-clip:border-box;" data-ls="static:forever;">
        <img width="708" height="710" src="frontend/img/hero/hero-2-1.png" class="ls-l ls-hide-phone ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:123px; left:830px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
        <img width="552" height="616" src="frontend/img/hero/h-s-2-1.png" class="ls-l ls-hide-phone ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:170px; left:1171px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;">
        <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:70px; font-weight:600; left:310px; top:305px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">
          Children Care
        </h1>
        {{-- <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:70px; font-weight:600; left:310px; top:374px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">
            Children Care
        </h1>
        <h1 style="font-size:70px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:70px; font-weight:600; left:310px; top:445px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">
            Program
        </h1> --}}
        <p style="font-size:24px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:315px; top:535px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:800; easingin:easeOutQuint;">Deskripsi Slider</p>
        {{-- <p style="font-size:24px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:315px; top:573px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:900; easingin:easeOutQuint;">laboriosam error nulla aut.</p> --}}

        <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:315px; top:642px; font-family:'Fredoka', sans-serif; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{route('home.index')}}" class="vs-btn">Lihat Selengkapnya</a></div>
        <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:90px; font-weight:600; left:150px; top:149px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">
           Children Care
        </h1>
        {{-- <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:90px; font-weight:600; left:150px; top:245px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">
            Children Care
        </h1>
        <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:90px; font-weight:600; left:150px; top:351px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">
            Program
        </h1> --}}
        <p style="font-size:34px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:150px; top:477px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:800; easingin:easeOutQuint;">Deskripsi Slider</p>
        {{-- <p style="stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif;; color:#ffffff; left:150px; top:538px; font-size:34px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:900; easingin:easeOutQuint;">laboriosam error nulla aut.</p> --}}
        <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:150px; top:630px; font-family:'Fredoka', sans-serif; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{route('home.index')}}" class="vs-btn">Lihat Selengkapnya</a></div>
        <h1 style="stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:110px; font-weight:600; left:100px; top:90px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; easingin:easeOutQuint;">
           Children Care
        </h1>
        {{-- <h1 style="stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:110px; font-weight:600; left:100px; top:236px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:300; easingin:easeOutQuint;">
            Children Care
        </h1>
        <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#ffffff; font-family:'Fredoka', sans-serif; line-height:110px; font-weight:600; left:100px; top:380px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:600; easingin:easeOutQuint;">
            Program
        </h1> --}}
        <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100px; top:578px; font-family:'Fredoka', sans-serif; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:100; delayin:1000; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;"><a href="{{route('home.index')}}" class="vs-btn">Lihat Selengkapnya</a></div>
        <img width="708" height="710" src="frontend/img/hero/hero-2-1.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:47px; left:1003px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:4; parallaxevent:cursor;">
        <img width="552" height="616" src="frontend/img/hero/h-s-2-1.png" class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="bg" decoding="async" style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; top:76px; left:1340px; -webkit-background-clip:border-box;" data-ls="parallax:true; parallaxlevel:3; parallaxevent:cursor;">
    </div>
      @endif
    </div>
</section>


<!--==============================
About Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-70 justify-content-center justify-content-xl-start">
            <div class="text-center text-xl-start col-lg-9 col-xl-8 col-xxl-9">
                <div class="title-area">
                    <span class="sec-subtitle">#</span>
                    <h2 class="sec-title">Sekolah Islam Maktab Ibnu Khaldun</h2>
                </div>
            </div>
            <div class="col-lg-8 col-xl-6 col-xxl-auto mb-md-3 mb-xl-0">
                <div class="img-box5">
                    <svg class="svg-hidden">
                        <clipPath id="ab-shape1" clipPathUnits="objectBoundingBox">
                            <path d="M0.464,0.006 C0.488,0,0.513,0,0.536,0.006 L0.7,0.046 C0.723,0.052,0.745,0.063,0.764,0.08 L0.89,0.192 C0.908,0.208,0.922,0.229,0.931,0.252 L0.99,0.41 C0.999,0.433,1,0.458,0.999,0.482 L0.979,0.65 C0.976,0.674,0.967,0.698,0.953,0.718 L0.858,0.857 C0.844,0.877,0.825,0.894,0.803,0.905 L0.655,0.984 C0.633,0.995,0.609,1,0.584,1 H0.416 C0.392,1,0.368,0.995,0.346,0.984 L0.197,0.905 C0.175,0.894,0.157,0.877,0.143,0.857 L0.047,0.718 C0.033,0.698,0.025,0.674,0.022,0.65 L0.001,0.482 C-0.002,0.458,0.001,0.433,0.01,0.41 L0.07,0.252 C0.078,0.229,0.092,0.208,0.111,0.192 L0.237,0.08 C0.255,0.063,0.277,0.052,0.301,0.046 L0.464,0.006"></path>
                        </clipPath>
                    </svg>
                    {{-- <div class="img-1 mega-hover"><img src="{{asset('frontend/img/about/ab-4-1.jpg')}}" alt="about"></div> --}}
                    <div class="img-1 mega-hover"><img src="{{asset('gallery/about-us.jpg')}}" alt="about"></div>
                    <div class="exp-pill">
                        <p class="exp-number"></p>
                        <p class="exp-text">#</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-6 text-center text-xl-start">
                <p class="fs-md pe-xxl-4 me-xxl-4 mb-4 pb-1 mt-n2">
                  Sekolah Setingkat TK/SD Full Berbahasa Arab Pertama di Medan.</p>
                {{-- <span class="sec-subtitle2">Jam Belajar</span> --}}
                <div class="title-divider1"></div>
                {{-- <div class="row gx-50 mb-xl-4 pb-3 justify-content-center justify-content-xl-start">
                    <div class="col-auto">
                        <div class="info-style1">
                            <p class="info-title">Morning:</p>
                            <p class="info-text">9am – 12noon</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="info-style1">
                            <p class="info-title">Lunch:</p>
                            <p class="info-text">12noon – 1pm</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="info-style1">
                            <p class="info-title">Afternoon:</p>
                            <p class="info-text">1pm – 3.30pm</p>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="frontend/img/icon/ab-4-1.svg" alt="icon"></div>
                            <h3 class="feature-title h5">Visi</h3>
                            <p class="feature-text">Sekolah Islam "Maktab" Setingkat TK-SD Berbahasa Arab Terbaik di Indonesia dengan Biaya Wakaf</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="frontend/img/icon/ab-4-2.svg" alt="icon"></div>
                            <h3 class="feature-title h5">Misi</h3>
                            <p class="feature-text">
                              <ul>
                                <li>Mendirikan sekolah Islam Setingkat TK - SD dengan pengantar berbahasa Arab</li>
                                <li>Membentuk tim riset untuk mengkaji dan membuat kerikulum berdasarkan pendidkan Islam</li>
                                <li>Membentuk tim riset membuat kurikulum bahasa Arab tingkat TK - SD</li>
                                <li>Membuat kajian ilmiyah secara rutin untuk meingkatkan kualitas keilmuan guru</li>
                                <li>Membuat pelatihan guru yang berkesinambungan</li>
                                <li>Membentuk tim wakaf untuk membiayai kegiatan pendidikan</li>
                                <li>Membuat kajian keluarga/wali murid</li>
                              </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Category Area
==============================-->
{{-- <section class="  ">
    <div class="container">
        <div class="title-area text-center">
            <div class="sec-bubble">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
            <h2 class="sec-title">How Old is Your Child?</h2>
            <p class="sec-text">What type of education is best for my child</p>
        </div>
        <div class="row gx-40 vs-carousel" data-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="2" data-dots="true">
            <div class="col-xl-4">
                <div class="category-style2">
                    <div class="category-img"><a href="class-details.html"><img src="frontend/img/category/cat-1-1.jpg" alt="category"></a></div>
                    <div class="category-content">
                        <h3 class="category-title"><a href="class-details.html" class="text-inherit">Babbies</a></h3>
                        <p class="category-text">From 6 Months</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="category-style2">
                    <div class="category-img"><a href="class-details.html"><img src="frontend/img/category/cat-1-2.jpg" alt="category"></a></div>
                    <div class="category-content">
                        <h3 class="category-title"><a href="class-details.html" class="text-inherit">Toddlers</a></h3>
                        <p class="category-text">18 - 24 MONTHS</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="category-style2">
                    <div class="category-img"><a href="class-details.html"><img src="frontend/img/category/cat-1-3.jpg" alt="category"></a></div>
                    <div class="category-content">
                        <h3 class="category-title"><a href="class-details.html" class="text-inherit">Preschool</a></h3>
                        <p class="category-text">3 - 4+ Years</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="category-style2">
                    <div class="category-img"><a href="class-details.html"><img src="frontend/img/category/cat-1-4.jpg" alt="category"></a></div>
                    <div class="category-content">
                        <h3 class="category-title"><a href="class-details.html" class="text-inherit">Younger</a></h3>
                        <p class="category-text">5 - 8+ Years</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<!--==============================
    Gallery Area
    ==============================-->
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area text-center">
                        <div class="sec-bubble">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div>
                        <h2 class="sec-title">Foto Galeri</h2>
                        <p class="sec-text">Foto kegiatan pembelajaran Sekolah Maktab Ibnu Khaldun</p>
                    </div>
                </div>
            </div>
            <div class="row gx-35 gy-gx filter-active">
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('gallery/gallery-vertical-01.jpg')}}" alt="gallery">
                            <a href="{{asset('gallery/gallery-vertical-01.jpg')}}" class="gallery-btn popup-image"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1 radius-2">
                        <div class="gallery-img">
                            <img src="{{asset('gallery/gallery-small-01.jpg')}}" alt="gallery">
                            <a href="{{asset('gallery/gallery-small-01.jpg')}}" class="gallery-btn popup-image"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('gallery/gallery-small-02.jpg')}}" alt="gallery">
                            <a href="{{asset('gallery/gallery-small-02.jpg')}}" class="gallery-btn popup-image"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('gallery/gallery-vertical-02.jpg')}}" alt="gallery">
                            <a href="{{asset('gallery/gallery-vertical-02.jpg')}}" class="gallery-btn popup-image"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('gallery/gallery-small-03.jpg')}}" alt="gallery">
                            <a href="{{asset('gallery/gallery-small-03.jpg')}}" class="gallery-btn popup-image"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item radius-3">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('gallery/gallery-small-04.jpg')}}" alt="gallery">
                            <a href="{{asset('gallery/gallery-small-04.jpg')}}" class="gallery-btn popup-image"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Wave Shape -->
<div class="vs-wave-shape  ">
    <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
    </svg>
</div>
<!--==============================
Why Choose Us
==============================-->
<section class="bg-vs-secondary space-extra-bottom">
    <div class="container">
        <div class="row text-center text-lg-start">
            <div class="col-lg-5 col-xl-6 mb-n4 mb-lg-0">
                <div class="title-area">
                    <span class="sec-subtitle text-white">Why Choose Us</span>
                    <h2 class="sec-title text-white">Fasilitas Unggulan</h2>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <div class="title-area">
                    <p class="sec-text text-white">Fasiltas yang akan anak-anak dapatkan selama bersekolah di Sekolah Maktab Ibnu Khaldun Medan</p>
                </div>
            </div>
        </div>
        <div class="row gx-0 mt-4 pt-2">
            <div class="col-md-6 col-xl-3">
                <div class="feature-style2">
                    <div class="feature-img">
                        <div class="vs-circle"></div>
                        <img src="{{asset('icon/png/011-audiobook.png')}}" style="width: 216px; height: 214px" alt="image">
                    </div>
                    <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Audio Visual Room</a></h3>
                    <p class="feature-text">Kelas-kelas yang sudah difasilitasi pembelajaran audio visual berbahasa arab.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feature-style2">
                    <div class="feature-img">
                        <div class="vs-circle"></div>
                        <img src="{{asset('icon/png/030-ebook.png')}}" style="width: 216px; height: 214px" alt="image">
                    </div>
                    <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Digital Library</a></h3>
                    <p class="feature-text">Perpustakaan yang sudah berbasis digital</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feature-style2">
                    <div class="feature-img">
                        <div class="vs-circle"></div>
                        <img src="{{asset('icon/png/002-desk.png')}}" style="width: 216px; height: 214px" alt="image">
                    </div>
                    <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Akustik Kelas Memadai & Modern</a></h3>
                    <p class="feature-text">Ruang kelas memedai & desain uang yang modern</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feature-style2">
                    <div class="feature-img">
                        <div class="vs-circle"></div>
                        <img src="{{asset('icon/png/010-global network.png')}}" style="width: 216px; height: 214px" alt="image">
                    </div>
                    <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Games, Leadership & Sains</a></h3>
                    <p class="feature-text">Pembelajaran dengan permainan bahasa arab, kepemimpinan nabawiyah dan sains.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
   About Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
      <div class="container">
          <div class="row align-items-center justify-content-between flex-row-reverse">
              <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                  <div class="img-box2">
                      <div class="transform-banner"><img src="{{ asset('gallery/about-us-02.jpg') }}" alt="about"></div>
                      <div class="vs-circle jump"></div>
                  </div>
              </div>
              <div class="col-lg-6 text-center text-lg-start">
                  <h2 class="sec-title me-xxl-5">Program Unggulan/Baramij Mumayyazah</h2>
                  <p class="sec-text col-xl-10 pe-4 mb-4">
                    Sekolah Maktab Ibnu Khaldun Medan mengedepankan program-program unggulan dalam kurikulum pembalajaran sebagai berikut:</p>
                  <div class="row justify-content-center justify-content-lg-start text-start">
                      <div class="col-auto">
                          <div class="list-style1">
                              <ul class="list-unstyled">
                                  <li>Menggunakan bahasa Arab sebagai pengantar</li>
                                  <li>Pendidik minimal lulusan Timur Tengah/sederajat yang ahli berbahasa Arab</li>
                                  <li>Menjadikan kurikulum pendidikan Islam (Maktab/Kuttab) sebagai dasar kurikulum</li>
                                  <li>Berlandaskan maqoshid syariah Islam dalam tujuan pendidikan</li>
                                  <li>Fokus pada pendidikan adab sebelum ilmu, ilmu sebelum amal, iman, dan ihsan.</li>
                                  <li>Fokus pada kecerdasan akal dengan robotika dan sains</li>
                                  <li>Melatih kepemimpinan nabawiyah</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><


<!--==============================
Team Area
==============================-->
{{-- <section class=" space-top bg-smoke">
    <div class="container">
        <div class="title-area text-center">
            <div class="sec-bubble">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
            <h2 class="sec-title">Qualified Teachers</h2>
            <p class="sec-text">We are constantly expanding the range of services offered</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="team-style1">
                    <div class="team-img">
                        <a href="team-details.html"><img src="frontend/img/team/t-1-1.jpg" alt="team"></a>
                    </div>
                    <div class="team-content">
                        <h3 class="team-name h2"><a href="team-details.html" class="text-inherit">Katie Willmore</a></h3>
                        <p class="team-degi">Principal and Manager</p>
                        <a href="tel:+4402076897888" class="team-number">+44 (0) 207 689 7888</a>
                        <div class="vs-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="frontend/img/team/t-1-2.jpg" alt="team"></a></div>
                    <h3 class="team-name"><a class="text-inherit" href="team-details.html">Jessica Levis</a></h3>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-style2">
                    <div class="team-img"><a href="team-details.html"><img src="frontend/img/team/t-1-3.jpg" alt="team"></a></div>
                    <h3 class="team-name"><a class="text-inherit" href="team-details.html">Nomina Leione</a></h3>
                </div>
            </div>
        </div>
        <div class="row text-center text-lg-start mt-lg-5 pt-4 align-items-center justify-content-between">
            <div class="col-lg-8 col-xl-9">
                <div class="title-area">
                    <span class="sec-subtitle">learning by connecting practice</span>
                    <h2 class="sec-title">Promoting high quality learning of Young Children</h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btns">
                    <a href="contact.html" class="vs-btn">Start Registration</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Wave Shape -->
<div class="vs-wave-shape style2 bg-smoke">
    <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
    </svg>
</div>
<!--==============================
Feature Area
==============================-->
{{-- <section class=" space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <div class="sec-bubble">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
            <h2 class="sec-title">Ekstrakurikuler</h2>
            <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-xl-auto order-2 order-xl-1">
                <div class="feature-style3">
                    <div class="feature-img">
                        <div class="img"><img src="frontend/img/feature/fe-1-1.jpg" alt="feature"></div>
                    </div>
                    <div class="feature-body">
                        <h3 class="feature-title h4">Ekskul A</h3>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li>Donec commodo, est sed</li>
                                <li>In eget tempor lacusn</li>
                                <li>raesent semper, ex cursus molestie</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-style3">
                    <div class="feature-img">
                        <div class="img"><img src="frontend/img/feature/fe-1-2.jpg" alt="feature"></div>
                    </div>
                    <div class="feature-body">
                        <h3 class="feature-title h4">Ekskul B</h3>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li>Donec commodo, est sed</li>
                                <li>In eget tempor lacus</li>
                                <li>raesent semper, ex cursus molestie</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-auto order-1 order-xl-2">
                <img src="frontend/img/about/fe-1-1.png" alt="feature" class="w-100">
            </div>
            <div class="col-md-6 col-xl-auto  order-3 order-xl-3">
                <div class="feature-style3">
                    <div class="feature-img">
                        <div class="img"><img src="frontend/img/feature/fe-1-3.jpg" alt="feature"></div>
                    </div>
                    <div class="feature-body">
                        <h3 class="feature-title h4">Ekskul C</h3>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li>Donec commodo, est sed</li>
                                <li>In eget tempor lacus</li>
                                <li>raesent semper, ex cursus molestie</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-style3">
                    <div class="feature-img">
                        <div class="img"><img src="frontend/img/feature/fe-1-4.jpg" alt="feature"></div>
                    </div>
                    <div class="feature-body">
                        <h3 class="feature-title h4">Ekskul D</h3>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li>Donec commodo, est sedtime</li>
                                <li>In eget tempor lacusstation</li>
                                <li>raesent semper, ex cursus molestie</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!--==============================
Testimonial Area
==============================-->
<section class=" space-extra-bottom">
    <div class="container">
        <div class="row justify-content-between text-center text-md-start">
            <div class="col-md-auto">
                <div class="title-area">
                    <span class="sec-subtitle">Testimoni</span>
                    <h2 class="sec-title">Apa yang Mereka Katakan</h2>
                </div>
            </div>
            <div class="col-md-auto align-self-end">
                <div class="sec-btns">
                    <button class="icon-btn" data-slick-prev=".testislide3"><i class="far fa-arrow-left"></i></button>
                    <button class="icon-btn" data-slick-next=".testislide3"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel testislide3" data-slide-show="2" data-md-slide-show="2">
            <div class="col-lg-6">
                <div class="testi-style2">
                    <p class="testi-text">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage sometimes known, is dummy.</p>
                    <div class="testi-body">
                        <div class="testi-icon"><i class="fas fa-quote-left"></i></div>
                        <div class="media-body">
                            <h3 class="testi-name h4">Mari Jain</h3>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-style2">
                    <p class="testi-text">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. It's not Latin, though it looks like it, and it actually says nor is</p>
                    <div class="testi-body">
                        <div class="testi-icon"><i class="fas fa-quote-left"></i></div>
                        <div class="media-body">
                            <h3 class="testi-name h4">Marko Polo</h3>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-style2">
                    <p class="testi-text">Mercedes loves her school. she is leaving Monday. She is going to miss all her teachers. It's very good play school. she loved every minute there thank you.</p>
                    <div class="testi-body">
                        <div class="testi-icon"><i class="fas fa-quote-left"></i></div>
                        <div class="media-body">
                            <h3 class="testi-name h4">Jannie Marko</h3>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Wave Shape -->
<div class="vs-wave-shape style3">
    <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
    </svg>
</div>

<!--==============================
Contact Area
==============================-->
<section class="bg-smoke" data-bg-src="{{asset('frontend/img/bg/bg-con-1-1.png')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-auto col-xxl-6">
              <div class="img-box6">
                  {{-- <div class="img-1 mega-hover"><img src="{{asset('frontend/img/about/con-1-1.jpg')}}" alt="image"></div>
                  <div class="img-2 mega-hover"><img src="{{asset('frontend/img/about/con-1-2.jpg')}}" alt="image"></div> --}}
                  <div class="img-1 mega-hover"><img src="{{asset('gallery/369976313_266641056308585_5990473093655764521_n.jpg')}}" style="width: 440px" alt="image"></div>
                  <div class="img-2 mega-hover"><img src="{{asset('gallery/404770181_326955203610503_6004865518562258046_n.jpg')}}" style="width: 440px" alt="image"></div>
              </div>
          </div>
          <div class="col-xl col-xxl-6 align-self-center">
              <h2 class="sec-title mb-3">Formulir Pendaftaran</h2>
              <div class="row">
                  <div class="col-sm-6">
                      <div class="list-style1">
                          <ul class="list-unstyled mb-0">
                              <li>Pendaftaran dimulai 15 Desember 2023 sampai dengan 29 Februari 2024</li>
                              <li>Waktu pendaftaran mulai pukul 08:00 - 14:00 WIB</li>
                          </ul>
                      </div>
                  </div>
                  {{-- <div class="col-sm-6">
                      <div class="list-style1">
                          <ul class="list-unstyled">
                              <li>Videos and articles</li>
                              <li>Join millions of students</li>
                          </ul>
                      </div>
                  </div> --}}
              </div>
              <form action="{{route('home.daftar')}}" method="POST" class="form-style3">
                @csrf
                  <div class="row justify-content-between">
                      <div class="col-md-6 form-group">
                          <label>Nama Lengkap Anak <span class="required">(Wajib Diisi)</span></label>
                          <input type="text" class="@error('nama_anak') {{'is-invalid'}} @enderror" name="nama_anak">
                          @error('nama_anak')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Tanggal Lahir Anak <span class="required">(Wajib Diisi)</span></label>
                          <input type="date" class="@error('tgl_lahir_anak') {{'is-invalid'}} @enderror" name="tgl_lahir_anak">
                          <small>Format isi : dd/mm/yyyy</small>
                          @error('tgl_lahir_anak')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Nama Orang Tua <span class="required">(Wajib Diisi)</span></label>
                          <input type="text" class="@error('nama_orangtua') {{'is-invalid'}} @enderror" name="nama_orangtua">
                          @error('nama_orangtua')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Alamat<span class="required">(Wajib Diisi)</span></label>
                          <input type="text" class="@error('alamat') {{'is-invalid'}} @enderror" name="alamat">
                          @error('alamat')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Email</label>
                          <input type="email" class="@error('email') {{'is-invalid'}} @enderror" name="email">
                          @error('email')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>No WA</label><span class="required">(Wajib Diisi)</span></label>
                          <input type="number" name="nomor_hp" class="@error('nomor_hp') {{'is-invalid'}} @enderror">
                          <small>*Cth : 628227311xxx</small>
                          @error('nomor_hp')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-auto align-self-center form-group">
                          <input type="checkbox" id="notice">
                          <label for="notice">Saya bersedia men-save nomor WA admin SIMIK ke dalam kontak saya.</label>
                      </div>
                      <div class="col-auto form-group">
                          <button class="vs-btn" type="submit">Daftar</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>



<!--==============================

==============================-->
<section class=" space-extra bg-smoke">
    <div class="container">
        <div class="title-area">
            <h2 class="text-center mt-n2">Key supporters</h2>
        </div>
        <div class="row vs-carousel gx-10" data-slide-show="5" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
            <div class="col-auto">
                <div class="brand-style1"><img src="{{asset('support/adil-grafika.png')}}" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{asset('support/frozy-farm.png')}}" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{asset('support/beneran-dimsum.png')}}" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{asset('support/madu-alhafizh.png')}}" alt="brand"></div>
            </div>
            {{-- <div class="col-auto">
                <div class="brand-style1"><img src="{{asset('support/.png')}}" alt="brand"></div>
            </div> --}}
        </div>
    </div>
</section><!-- Wave Shape -->
<div class="vs-wave-shape style2 bg-smoke">
    <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
    </svg>
</div>

<!--==============================
    FAQ Area
    ==============================-->
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row gx-80">
                <div class="col-lg-6 col-xxl-auto pb-3 pb-xl-0">
                    <div class="img-box3">
                        <div class="img-1 mega-hover">
                            {{-- <img src="{{asset('frontend/img/about/faq-1-1.jpg')}}" alt="FAQ"> --}}
                            <img src="{{asset('gallery/faq-picture.jpg')}}" alt="FAQ">
                            {{-- <a href="https://youtube.com/shorts/7kQVFRyQ9QU" class="play-btn popup-video position-center"><i class="fas fa-play"></i></a> --}}
                        </div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="title-area text-center text-lg-start">
                        <span class="sec-subtitle">menjawab pertanyaan umum.
                        </span>
                        <h2 class="sec-title">FAQ (Frequently Asked Questions):</h2>
                    </div>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                    Apa Itu Maktab Ibnu Khaldun?
                                </button>
                            </div>
                            <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Sekolah Maktab Ibnu Khaldun adalah sekolah Islam setingkat TK-SD berbahasa Arab.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                    Dimana Alamat Sekolah Maktab Ibnu Khaldun?
                                </button>
                            </div>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Sekolah Maktab Ibnu Khaldun berlokasi di Jl. Murai No. 139E Sei Sikambing B, Medan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                    Kapan Pendaftara Sekolah Maktab Ibnu Khaldun Dibuka?
                                </button>
                            </div>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Pendaftaran dibuka dimuali dari tanggal 15 Desember 2023 sampai dengan 29 Februari 2024. Silahkan mengujungi halaman <a href="{{route('home.daftar')}}">pendaftaran disini</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                    Apa Saja Syarat Pendaftaran?
                                </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    {{-- <p>Sekolah menerima murid di usia 6 - 6,6 tahun</p> --}}
                                    <ol>
                                        <li>Usia Murid 6 - 6,6 tahun</li>
                                        <li>Mengisi Formulir Pendaftaran atau Via Online Pada Link: <a href="https://simik.id/daftar">https://simik.id/daftar</a></li>
                                        <li>Melampirkan Berkas pendaftaran :
                                          <ul>
                                            <li>Fotocopy Foto Keluarga</li>
                                            <li>Fotocopy Akte Kelahiran</li>
                                            <li>Pas Foto 3x4 Dua Lembar</li>
                                          </ul>
                                        </li>
                                        <li>Membayar Uang Pendaftaran Rp.400.000,-</li>
                                        <li>Mengikuti Ujian Seleksi Murid Baru</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item">
                            <div class="accordion-header" id="headingFive1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
                                    Can your child play with others?
                                </button>
                            </div>
                            <div id="collapseFive1" class="accordion-collapse collapse" aria-labelledby="headingFive1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Enrolment Events are like open days or open weeks at Busy Bees. It's a chance for you to visit your local nursery, take a look around, and see some of exciting activities in action. </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--==============================
Blog Area
==============================-->
<section class=" space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <div class="sec-bubble">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
            <h2 class="sec-title">Artikel</h2>
            <p class="sec-text">Artikel-artikel seputar informasi dan pengetahuan dari Sekolah Islam Maktab Ibnu Khaldun Medan</p>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">

          @if(count($daftar_blog) > 0)
          @foreach($daftar_blog as $blog)
            <div class="col-xl-4">
                <div class="vs-blog blog-style1">
                    <div class="blog-img">
                        {{-- <img src="frontend/img/blog/blog-1-1.jpg" alt="Blog Thumbnail" class="w-100"> --}}
                        <img src="{{Storage::url($blog->foto)}}" alt="Blog Thumbnail" class="w-100">
                    </div>
                    <div class="blog-content">
                        <a href="blog.html" class="blog-date"><i class="fal fa-calendar-alt"></i>{{ date_format($blog->created_at, 'd M Y')}}</a>
                        <h3 class="blog-title h5"><a href="blog-details.html">{{$blog->judul}}</a></h3>
                        <p class="blog-text">{{$blog->abstrak}}</p>
                    </div>
                    <a href="{{route('home.blog.detail', $blog->id)}}" class="blog-btn">Baca Selengkapnya<i class="far fa-angle-right"></i></a>
                </div>
            </div>
            @endforeach
            @else

            <div class="col-xl-4">
                <div class="vs-blog blog-style1">
                    <div class="blog-img">
                        <img src="frontend/img/blog/blog-1-3.jpg" alt="Blog Thumbnail" class="w-100">
                    </div>
                    <div class="blog-content">
                        <a href="blog.html" class="blog-date"><i class="fal fa-calendar-alt"></i>December 3, 2023</a>
                        <h3 class="blog-title h5"><a href="blog-details.html">In particular, the garbled words of lorem</a></h3>
                        <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididunt ut la bore et dolore magna aliqua</p>
                    </div>
                    <a href="blog-details.html" class="blog-btn">Baca Selengkapnya<i class="far fa-angle-right"></i></a>
                </div>
            </div>
            @endif
        </div>
    </div>
</section><!--==============================
Instagram Posts
==============================-->
<section class=" space-bottom">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Follow @instagram</h2>
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="4" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1">
            <div class="col-auto">
                <div class="">
                    <div class="gallery-img">
                        {{-- <img src="frontend/img/gallery/gal-2-1.jpg" alt="gallery">
                        <a href="frontend/img/gallery/gal-2-1.jpg" class="gallery-btn popup-image"><i class="far fa-plus"></i></a> --}}
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C1Mfc5OLk6H/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C1Mfc5OLk6H/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C1Mfc5OLk6H/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Sekolah Islam Maktab Ibnu Khaldun (@maktab.ibnukhaldun)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="">
                    <div class="gallery-img">
                        {{-- <img src="frontend/img/gallery/gal-2-3.jpg" alt="gallery">
                        <a href="frontend/img/gallery/gal-2-3.jpg" class="gallery-btn popup-image"><i class="far fa-plus"></i></a> --}}
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/C0jJC57rMi0/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C0jJC57rMi0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/C0jJC57rMi0/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Sekolah Islam Maktab Ibnu Khaldun (@maktab.ibnukhaldun)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="">
                    <div class="gallery-img">
                      {{-- <img src="frontend/img/gallery/gal-2-6.jpg" alt="gallery">
                      <a href="frontend/img/gallery/gal-2-6.jpg" class="gallery-btn popup-image"><i class="far fa-plus"></i></a> --}}
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C0a9R7gLwDC/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C0a9R7gLwDC/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C0a9R7gLwDC/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Sekolah Islam Maktab Ibnu Khaldun (@maktab.ibnukhaldun)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="">
                    <div class="gallery-img">
                        {{-- <img src="frontend/img/gallery/gal-2-7.jpg" alt="gallery">
                        <a href="frontend/img/gallery/gal-2-7.jpg" class="gallery-btn popup-image"><i class="far fa-plus"></i></a> --}}
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C0Qlp_ErjZa/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C0Qlp_ErjZa/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C0Qlp_ErjZa/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Sekolah Islam Maktab Ibnu Khaldun (@maktab.ibnukhaldun)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wave Shape -->

<div class="vs-wave-shape  ">
    <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
    </svg>
</div>
@endsection
