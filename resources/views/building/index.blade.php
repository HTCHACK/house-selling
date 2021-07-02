@extends('layouts.body')

@section('content')

    @livewireStyles
    <section class="main-listing">
        <div class="section__header">
            <div class="section__header-overlay" style="background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url({{ asset('front/build.jpg') }});
          background-repeat:no-repeat;
          background-position:center;
          background-size:cover;
          padding-top:10%;
          padding-bottom:10%
          ">
                <div class="container">
                    <h1 class="section__title section__title--centered">Buildings For Sale</h1>
                    <ul class="ht-breadcrumbs ht-breadcrumbs--centered">
                        <li class="ht-breadcrumbs__item"><a href="{{ route('home') }}" class="ht-breadcrumbs__link"><span
                                    class="ht-breadcrumbs__title">Home</span></a></li>
                        <li class="ht-breadcrumbs__item"><a href="" class="ht-breadcrumbs__link"><span
                                    class="ht-breadcrumbs__title">Buildings</span></a></li>
                    </ul><!-- ht-breadcrumb -->
                </div><!-- .container -->
            </div><!-- .section__header-overlay -->
        </div><!-- .section__header -->

        <div class="main-listing__main">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">

                        <section class="widget main-listing__widget widget__news">
                            <h3 class="widget__title">Get to Know</h3>
                            <ul class="widget__news-list">
                                <li class="widget__news-item"><a href="">Outer Sunset Real Estate: <span>San Francisco
                                            Neighborhood Guide</span></a></li>
                                <li class="widget__news-item"><a href="">Pacific Heights Real Estate: <span>San Francisco CA
                                            Neighborhood</span></a></li>
                                <li class="widget__news-item"><a href="">Mission District San Francisco: <span>Authentic
                                            Community</span></a></li>
                                <li class="widget__news-item"><a href="">Hayes Valley Real Estate: <span>San Francisco CA
                                            Neighborhood</span></a></li>
                                <li class="widget__news-item"><a href="">Hayes Valley Real Estate: <span>San Francisco CA
                                            Neighborhood</span></a></li>
                            </ul>
                        </section><!-- .widget -->
                    </aside><!-- .col -->

                    <main class="col-md-9">
                        <div class="main-listing--col-md-12">
                            <section class="main-listing__inner">
                                <section class="listing-sort">
                                    <div class="container-fluid">
                                        <div class="listing-sort__inner">


                                            <p class="listing-sort__sort">
                                                <label class="listing-sort__label"><i class="fa fa-sort-amount-asc"
                                                        aria-hidden="true"></i> Search By Building Name </label>
                                            </p>
                                            <p class="listing-sort__sort" style="padding-left:0.5rem">
                                                <input type="text" class="ht-field listing-sort__field"
                                                    placeholder="Building Name ..." wire:model.debounce300ms="searchCity"
                                                    style="background:#efefef" />
                                            </p>
                                        </div><!-- .listing-sort__inner -->
                                    </div><!-- .container -->
                                </section><!-- .listing-sort -->
                            </section>
                        </div><!-- .listing-sort -->



                        <section class="main-listing__item-grid">
                            @foreach ($buildings as $building)
                                <div class="item-grid__container">
                                    <div class="listing">
                                        <div class="item-grid__image-container">
                                            <a href="single_property_1.html">
                                                <div class="item-grid__image-overlay"></div>
                                                <!-- .item-grid__image-overlay -->
                                                <img src="{{ asset('front/images/uploads/castalia_shibakoen.jpg') }}"
                                                    alt="Castalia Shibakoen" class="listing__img">
                                                <span class="listing__favorite"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>

                                        <div class="item-grid__content-container">
                                            <div class="listing__content">
                                                <h3 class="listing__title"><a
                                                        href="single_property_1.html">{{ $building->name }}</a></h3>
                                                <p class="listing__location"><span
                                                        class="ion-ios-location-outline listing__location-icon"></span>
                                                    {{ $building->address }}</p>
                                                <p class="listing__price">{{ $building->blocks->count() }} Blocks</p>
                                                <div class="listing__details">
                                                    <ul class="listing__stats">

                                                    </ul><!-- .listing__stats -->
                                                    <a href="{{ route('buildingspage.show', $building->id) }}"
                                                        class="listing__btn">Details <span class="listing__btn-icon"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                                </div><!-- .listing__details -->
                                            </div><!-- .listing-content -->
                                        </div>
                                    </div><!-- .listing -->
                                </div><!-- .col -->
                            @endforeach
                        </section><!-- .main-listing__item-grid -->


                    </main><!-- .col -->
                </div><!-- row -->
            </div><!-- .container -->
        </div><!-- .main-listing__main -->
    </section><!-- .main-listing -->

    @livewireScripts

@endsection
