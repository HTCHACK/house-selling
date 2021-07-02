@extends('layouts.body')

@section('content')


<section class="features" style="background:url({{asset('front/dream.jpeg')}})">
    <div class="features__overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="feature">
              <a href="{{route('buildingspage.index')}}"><img src="{{asset('front/images/icon_map.png')}}" alt="Map" class="feature__icon"></a>
              <h3 class="feature__title">Houses</h3>

            </div><!-- .feature -->
          </div><!-- .col -->

          <div class="col-sm-6">
            <div class="feature">
              <a href="{{route('buildingspage.index')}}"><img src="{{asset('front/images/icon_search.png')}}" alt="Search" class="feature__icon"></a>
              <h3 class="feature__title">Houses</h3>

            </div><!-- .feature -->
          </div><!-- .col -->

        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .features__overlay -->
  </section><!-- .features -->

@endsection
