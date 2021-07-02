@extends('layouts.body')


@section('content')

<section class="property">
    <div class="container">
      <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
        <li class="ht-breadcrumbs__item"><a href="{{route('home')}}" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
        <li class="ht-breadcrumbs__item"><a href="{{route('buildingspage.index')}}" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Houses</span></a></li>
      </ul><!-- ht-breadcrumb -->
    </div><!-- .container -->

    <div class="property__header">
      <div class="container">
        <div class="property__header-container">
          <ul class="property__main">
            <li class="property__title property__main-item">
              <div class="property__meta">
                <span class="property__offer">
                    @if($flat->status == 0)
                    Sold
                    @else
                    On Sale
                    @endif
                </span>
                <span class="property__type">Flat Number {{$flat->number}}</span>
              </div><!-- .property__meta -->
              <h2 class="property__name">Flat Number {{$flat->number}}</h2>
              <span class="property__address"><i class="ion-ios-location-outline property__address-icon"></i>Flour Number {{$flat->etaj->number}}</span>
            </li>
            <li class="property__details property__main-item">
              <ul class="property__stats">
                <li class="property__stat"><span class="property__figure">{{$flat->count_rooms}}</span> Rooms</li>
              </ul><!-- .listing__stats -->
            </li>
            <li class="property__price property__main-item">
              <h4 class="property__price-primary">$ {{$flat->prize}}</h4>
            </li>
          </ul><!-- .property__main -->

          <ul class="property__list">
          </ul><!-- .property__list -->
        </div><!-- .property__header-container -->
      </div><!-- .container -->
    </div><!-- .property__header -->

    <div class="property__container">
      <div class="container">
        <div class="row">
          <main class="col-md-9">
            <div class="property__feature-container">
              <div class="property__slider property__slider--v2">

                </div><!-- .property__slider -->

              <div class="property__feature">
                <h3 class="property__feature-title"></h3>
                <div class="property__feature-schedule">

                  <a href="{{route('home')}}" class="property__feature-cta">Go Home</a>
                </div><!-- .property__feature-schedule -->

              </div><!-- .property__feature -->
              <div class="property__feature">
                <h3 class="property__feature-title property__feature-title--b-spacing">Flat</h3>
                <div class="property__accordion">
                  <div class="property__accordion-header">
                    <div class="property__accordion-textcontent">
                      <span class="property__accordion-title">Flat</span>
                      <ul class="property__accordion-stats">
                        <li class="property__accordion-figure"><span class="property__accordion-figure--cat">Rooms:</span> {{$flat->count_rooms}}</li>
                      </ul><!-- .property__accordion-stats -->
                    </div><!-- .property__accordion-textcontent -->
                    <i class="fa fa-caret-down property__accordion-expand" aria-hidden="true"></i>
                  </div><!-- .property__accordion-header -->

                  <div class="property__accordion-content">
                    <img src="{{asset('front/images/uploads/floor_plan.png')}}" alt="Floor Plan">
                  </div><!-- .property__accordion-content -->
                </div><!-- .property__accordion -->
              </div><!-- .property__feature -->

            </div><!-- .property__feature-container -->
          </main>

          <aside class="col-md-3">
            <div class="widget__container">
              <section class="widget">
                <form class="contact-form contact-form--white" method="POST" action="{{route('clients.store',$flat->id)}}">
                    @csrf
                  <div class="contact-form__header">
                    <div class="contact-form__header-container">

                      <div class="contact-info">
                        <h3 class="contact-name"><a href="">Buy Flat</a></h3>
                      </div><!-- .contact-info -->
                    </div><!-- .contact-form__header-container -->
                  </div><!-- .contact-form__header -->

                  <div class="contact-form__body">
                      <input type="hidden" name="flat_id" value="{{$flat->id}}">
                    <input type="text" class="contact-form__field" placeholder="Name" name="name" required>
                    <input type="text" class="contact-form__field" placeholder="Surname" name="surname" required>
                    <input type="tel" class="contact-form__field" placeholder="Phone number" name="phone_number">
                    <textarea class="contact-form__field contact-form__comment" cols="30" rows="5" placeholder="Address" name="address" required></textarea>
                  </div><!-- .contact-form__body -->

                  <div class="contact-form__footer">
                    <input type="submit" class="contact-form__submit" value="Send ">
                  </div><!-- .contact-form__footer -->
                </form><!-- .contact-form -->
              </section><!-- .widget -->






            </div><!-- .widget__container -->
          </aside>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .property__container -->
  </section><!-- .property -->

@endsection
