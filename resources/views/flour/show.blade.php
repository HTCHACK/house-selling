@extends('layouts.body')

@section('content')

    <section class="main-listing">


        <div class="main-listing__main">
            <div class="container">
                <div class="row">
                    <h1 class="section__title section__title--centered section__title--b-margin-40">
                        Flour {{$etaj->number}}</h1>
                </div>

            </div>
        </div>
    </section>


        <section class="main-listing__grid" style="margin-top:-2rem">
            <div class="container">
                <div class="row">
                    @foreach ($etaj->flats as $key => $flat)
                        <div class="col-md-4 item-grid__container">
                            <div class="listing">
                                <div class="item-grid__image-container">
                                    <a href="{{route('flatsspage.show',$flat->id)}}">
                                        <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                                        <img src="{{ asset('front/images/uploads/residia_nishi_azabu.jpg') }}"
                                            alt="Residia Nishi Azabu" class="listing__img">
                                        <span class="listing__favorite"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </div><!-- .item-grid__image-container -->

                                <div class="item-grid__content-container">
                                    <div class="listing__content">
                                        <h3 class="listing__title">
                                            <a href="{{route('flatsspage.show',$flat->id)}}">Flat number {{$flat->number}}</a>
                                        </h3>
                                        <p class="listing__location"><span
                                                class="ion-ios-location-outline listing__location-icon"></span> Flour number - {{ $flat->etaj->number }} </p>
                                        <p class="listing__price">{{$flat->prize}} $</p>
                                        <div class="listing__details">
                                            <ul class="listing__stats">
                                                <li><span class="listing__figure">{{$flat->count_rooms}}</span> Rooms</li>
                                            </ul><!-- .listing__stats -->

                                                @if($flat->status == 0)
                                                <a href="{{route('flatsspage.show',$flat->id)}}" class="listing__btn" style="background:#f00;color:#fff;font-weight:bolder;font-size:15px;border-color:#fff">Sold
                                                @else
                                                <a href="{{route('flatsspage.show',$flat->id)}}" class="listing__btn">On Sale
                                                @endif
                                                <span
                                                    class="listing__btn-icon"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i></span></a>
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
