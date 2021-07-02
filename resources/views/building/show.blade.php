@extends('layouts.body')

@section('content')

<section class="main-listing">
    <section class="map-container">
      <div  class="map--default">
        {!!$building->map!!}
    </div><!-- #map -->

    </section><!-- .map-container -->

    <section class="listing-search" style="padding-top:2%;padding-bottom:2%">
      <div class="container">
      </div><!-- .container -->
    </section><!-- .listing-search -->

    <section class="listing-sort">
      <div class="container">
        <div class="listing-sort__inner">
          <ul class="listing-sort__list">
            <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-list" aria-hidden="true" class="listing-sort__icon"></i></a></li>
            <li class="listing-sort__item"><a href="#" class="listing-sort__link listing-sort__link--active"><i class="fa fa-th" aria-hidden="true" class="listing-sort__icon"></i></a></li>
            <li class="listing-sort__item"><a href="#" class="listing-sort__link"><i class="fa fa-th-large" aria-hidden="true" class="listing-sort__icon"></i></a></li>
          </ul>

          <span class="listing-sort__result">1-9 of 25 results</span>

          <p class="listing-sort__sort">
            <label for="sort-type" class="listing-sort__label"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Sort by </label>
            <select name="sort-type" id="sort-type" class="ht-field listing-sort__field">
              <option value="default">Default</option>
              <option value="low-price">Price (Low to High)</option>
              <option value="high-price">Price (High to Low)</option>
              <option value="featured">Featured</option>
            </select>
          </p>
        </div><!-- .listing-sort__inner -->
      </div><!-- .container -->
    </section><!-- .listing-sort -->

    <section class="main-listing__grid">
      <div class="container">
        <div class="row">

          @foreach ($building->blocks as $key=>$block)
          <div class="col-md-4 item-grid__container">
            <div class="listing">
              <div class="item-grid__image-container">
                <a href="">
                  <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                  <img src="{{asset('front/images/uploads/dream_house_take_away.jpg')}}" alt="" class="listing__img">
                  <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                </a>
              </div><!-- .item-grid__image-container -->

              <div class="item-grid__content-container">
                <div class="listing__content">
                  <h3 class="listing__title"><a href="">Block Number - {{$block->number}}</a></h3>
                  <p class="listing__location"><span class="ion-ios-location-outline listing__location-icon"></span> {{$building->address}}</p>
                  <p class="listing__price">Building <span class="listing__price--small">{{$building->name}}</span></p>
                  <div class="listing__details">
                    <ul class="listing__stats">
                      <li><span class="listing__figure">{{$block->etajs->count()}}<sup></sup></span> Flour</li>
                    </ul><!-- .listing__stats -->
                    <a href="{{route('blockspage.show',$block->id)}}" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                  </div><!-- .listing__details -->
                </div><!-- .listing-content -->
              </div><!-- .item-grid__content-container -->
            </div><!-- .listing -->
          </div><!-- .col -->
          @endforeach
        </div><!-- .row -->


      </div><!-- .container -->
    </section><!-- .item-grid-3 -->
  </section><!-- .main-listing -->

@endsection
