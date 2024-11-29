<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-4 no-padding">
                    <div class="header-top-left">
                        <a href="">
                            <i class="fa fa-phone"></i>
                            01718542095
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <ul>
                        <li><a href="https://www.facebook.com/share/1EudBRVVXr/?mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo" >
                <a href="{{url('home')}}">
                    <img style="height: 60px ;width: 100px " src="{{asset('front_assets/img/logo.png')}}" alt="" title="" />
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    {{-- <li class="menu-active"><a href="{{url('/home')}}">home</a></li> --}}
                    <li><a href="{{url('about')}}">about us</a></li>
                    <li class="menu-has-children"><a href="{{url('services')}}">Serivices</a>
                        <ul>
                            <li><a href="{{url('interior')}}">Interior</a></li>
                            <li><a href="{{url('exterior')}}">Exterior</a></li>
                            <li><a href="{{url('branding')}}">Branding</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('portfolio')}}">portfolio</a></li>
                    {{-- <li class="menu-has-children"><a href="{{url('elements')}}">Portfolio</a>
                        <ul>
                            <li><a href="{{url('portfolio-details')}}">Portfolio Details</a></li>
                            <li><a href="{{url('elements')}}">Elements</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                </ul>
            </nav>
            <!--######## #nav-menu-container -->
        </div>
    </div>
</header>
