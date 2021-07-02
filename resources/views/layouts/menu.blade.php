<header class="header header--blue">
    <div class="container">
        <div class="header__main">
            <div class="header__logo">
                <a href="">
                    <h1 class="screen-reader-text">Housing Sale</h1>
                    <img src="{{ asset('front/images/map1.png') }}" alt="" width="40px">
                </a>
            </div><!-- .header__logo -->

            <div class="nav-mobile">
                <a href="#" class="nav-toggle">
                    <span></span>
                </a><!-- .nav-toggle -->
            </div><!-- .nav-mobile -->

            <div class="header__menu header__menu--v6">
                <ul class="header__nav">
                    <li
                        class="header__nav-item">
                        <a href="{{route('home')}}"
                            class="header__nav-link header__nav-link--v2">Home</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{route('buildingspage.index')}}" class="header__nav-link header__nav-link--v2">Houses</a>
                    </li>
                    <li class="header__nav-item">
                        <a href=""
                            class="header__nav-link header__nav-link--v2">Gallery</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="" class="header__nav-link header__nav-link--v2">Contact</a>
                    </li>

                </ul><!-- .header__nav -->

            </div><!-- .header__menu -->
        </div><!-- .header__main -->
    </div><!-- .container -->
</header><!-- .header -->
