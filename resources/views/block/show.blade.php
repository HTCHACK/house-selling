@extends('layouts.body')

@section('content')

    <section class="main-listing">
        <div class="container">
            <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding">
                <li class="ht-breadcrumbs__item"><a href="{{ route('home') }}" class="ht-breadcrumbs__link"><span
                            class="ht-breadcrumbs__title">Home</span></a></li>
                <li class="ht-breadcrumbs__item"><a href="{{ route('buildingspage.index') }}"
                        class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Houses</span></a></li>
            </ul><!-- ht-breadcrumb -->
        </div><!-- .container -->

        <div class="main-listing__main">
            <div class="container">
                <div class="row">
                    <h1 class="section__title section__title--centered section__title--b-margin-40">
                        {{ $block->buildingBlock->name }} - Block Number - <span>{{ $block->number }}</span></h1>
                    <aside class="col-md-3">

                        <section class="widget main-listing__widget widget__news">
                            <h3 class="widget__title">Get to Know</h3>
                            <ul class="widget__news-list">
                                <li class="widget__news-item"><a href="listing_1.html#">Outer Sunset Real Estate: <span>San
                                            Francisco Neighborhood Guide</span></a></li>
                                <li class="widget__news-item"><a href="listing_1.html#">Pacific Heights Real Estate:
                                        <span>San Francisco CA Neighborhood</span></a></li>
                                <li class="widget__news-item"><a href="listing_1.html#">Mission District San Francisco:
                                        <span>Authentic Community</span></a></li>
                                <li class="widget__news-item"><a href="listing_1.html#">Hayes Valley Real Estate: <span>San
                                            Francisco CA Neighborhood</span></a></li>
                            </ul>
                        </section><!-- .widget -->
                    </aside><!-- .col -->

                    <main class="col-md-9">

                            <div class="listing-sort listing-sort--main-listing">
                                <div class="listing-sort__inner">
                                    <ul class="listing-sort__list">
                                        <li class="listing-sort__item"><a href="listing_1.html#"
                                                class="listing-sort__link listing-sort__link--active"><i
                                                    class="fa fa-th-list" aria-hidden="true"
                                                    class="listing-sort__icon"></i></a></li>
                                        <li class="listing-sort__item"><a href="listing_1.html#"
                                                class="listing-sort__link"><i class="fa fa-th-large" aria-hidden="true"
                                                    class="listing-sort__icon"></i></a></li>
                                    </ul>

                                    <span class="listing-sort__result">1-10 of 25 results</span>

                                    <p class="listing-sort__sort">
                                        <label for="sort-type" class="listing-sort__label"><i class="fa fa-sort-amount-asc"
                                                aria-hidden="true"></i> Sort by </label>
                                        <select name="sort-type" id="sort-type" class="ht-field listing-sort__field">
                                            <option value="default">Default</option>
                                            <option value="low-price">Price (Low to High)</option>
                                            <option value="high-price">Price (High to Low)</option>
                                            <option value="featured">Featured</option>
                                        </select>
                                    </p><!-- .listing-sort__sort -->
                                </div><!-- .listing-sort__inner -->
                            </div><!-- .listing-sort -->



                        <section>
                            @foreach ($block->etajs as $key=>$etaj)
                            <div class="item-grid__container">
                                <div class="listing listing--v2">
                                    <div class="item-grid__image-container item-grid__image-container--v2">
                                        <a href="{{route('flourspage.show',$etaj->id)}}">
                                            <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                                            <img src="{{ asset('front/images/uploads/castalia_shibakoen.jpg') }}"
                                                alt="Castalia Shibakoen" class="listing__img">
                                            <span class="item__label">For Sale</span>
                                            <span class="listing__favorite listing__favorite--v2"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </div><!-- .col -->

                                    <div class="item-grid__content-container item-grid__content-container--v2">
                                        <div class="listing__content--v2">
                                            <div class="listing__header">
                                                <div class="listing__header-primary">
                                                    <span class="listing__type">Villa</span>
                                                    <h3 class="listing__title"><a href="single_property_1.html">Flour Number - {{$etaj->number}}</a></h3>
                                                    <p class="listing__location"><span
                                                            class="ion-ios-location-outline listing__location-icon"></span>
                                                            {{ $block->buildingBlock->name }}</p>
                                                </div><!-- .listing__header-primary -->
                                                <p class="listing__price"></p>
                                            </div><!-- .listing__header -->
                                            <div class="listing__details">
                                                <ul class="listing__stats">
                                                    <li><span class="listing__figure">{{$etaj->flats->count()}}</span>Flats</li>
                                                </ul><!-- .listing__stats -->
                                                <a href="{{route('flourspage.show',$etaj->id)}}" class="listing__btn">Details <span
                                                        class="listing__btn-icon"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></span></a>
                                            </div><!-- .listing__details -->
                                        </div><!-- .listing-content -->
                                    </div><!-- .col -->
                                </div><!-- .listing -->
                            </div><!-- .item-grid__container -->
                            @endforeach

                        </section>


                    </main><!-- .col -->
                </div><!-- row -->
            </div><!-- .container -->
        </div><!-- .main-listing__main -->
    </section><!-- .main-listing -->

@endsection
