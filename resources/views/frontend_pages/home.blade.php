@extends('front_layout.app')
@section('content')
    <!--######## start banner Area ########-->
    <section class="home-banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center">
                <div class="banner-content col-lg-9 col-md-12">
                    <h1>
                        Creativity <br> Beyond <br> Life
                    </h1>
                    <a href="#" class="primary-btn header-btn text-capitalize mt-10">hire us now!</a>
                </div>
            </div>
        </div>
    </section>

    <div class="row justify-content-center" style="margin-top: 4%">
        <div class="col-lg-12">
            <div class="main-title text-center">
                {{-- <h1>Latest News from all categories</h1> --}}
                <p>
                    <strong style="font-size: 20px"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</strong>
                </p>
            </div>
        </div>
    </div
    {{-- <!--######## End banner Area ########--> --}}

    {{-- <!--######## Start Latest News Area ########--> --}}
    <section class="latest-news-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>Services</h1>
                        <h3>We love what we do</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/news/n1.jpg') }}"
                            alt="Card image cap">


                        <div class="card-body ">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Interior Design
                                </a>
                            </h4>
                            {{-- <p class="card-text">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This
                            can be compared to an actual.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/news/n2.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center" >
                                <a href="#">
                                    Exterior Design
                                </a>
                            </h4>
                            {{-- <p class="card-text">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This
                            can be compared to an actual.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/news/n3.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center" >
                                <a href="#" >
                                    Brianding
                                </a>
                            </h4>
                            {{-- <p class="card-text">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This
                            can be compared to an actual.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End Latest News Area ########-->

    <!--######## Start Our Offer Area ########-->
    {{-- <section class="our-offer-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="single-circle">
                            <div class="single-item">
                                <div class="progressBar progressBar--animateText" data-progress="75">
                                    <svg class="progressBar-contentCircle" viewBox="0 0 200 200">
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
                                    </svg>
                                    <span class="progressBar-percentage progressBar-percentage-count">1.5K</span>
                                </div>
                            </div>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="single-circle">
                            <div class="single-item">
                                <div class="progressBar progressBar--animateText" data-progress="75">
                                    <svg class="progressBar-contentCircle" viewBox="0 0 200 200">
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
                                    </svg>
                                    <span class="progressBar-percentage progressBar-percentage-count">10</span>
                                </div>
                            </div>
                            <h4>Years of Experience</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="single-circle">
                            <div class="single-item">
                                <div class="progressBar progressBar--animateText" data-progress="75">
                                    <svg class="progressBar-contentCircle" viewBox="0 0 200 200">
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
                                    </svg>
                                    <span class="progressBar-percentage progressBar-percentage-count">250</span>
                                </div>
                            </div>
                            <h4>Professionals</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="single-circle">
                            <div class="single-item">
                                <div class="progressBar progressBar--animateText" data-progress="75">
                                    <svg class="progressBar-contentCircle" viewBox="0 0 200 200">
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-background" cx="100" cy="100" r="95" />
                                        <circle transform="rotate(-90, 100, 100)" class="progressBar-circle" cx="100" cy="100" r="95" />
                                    </svg>
                                    <span class="progressBar-percentage progressBar-percentage-count">369</span>
                                </div>
                            </div>
                            <h4>On Going Job</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main-title text-left">
                            <h1>We can be your digital Problems Solution Partner</h1>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
                                in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                            </p>
                            <a href="#" class="primary-btn offer-btn mr-10">What we Offer</a>
                            <a href="#" class="primary-btn quote-btn">Get a free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!--######## End Our Offer Area ########-->

    <!--######## Start Recent Completed Project Area ########-->
    <section class="recent-completed-project section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>Our Recent Completed Projects</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna
                            aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="filters project-filter">
                        <ul>
                            <li class="active" data-filter=".all">All Categories</li>
                            <li data-filter=".brand">Branding</li>
                            <li data-filter=".img-man">Image Manipulation</li>
                            <li data-filter=".creative">Creative Work</li>
                            <li data-filter=".web">Web Design</li>
                            <li data-filter=".print-mat">Print Material</li>
                        </ul>
                    </div>
                    <div class="projects_inner row" id="lightgallery">
                        <div class="col-lg-4 col-sm-6 web all" data-src="{{ asset('front_assets/img/project/p1.jpg') }}">
                            <div class="projects_item">
                                <img class="img-fluid w-100" src="{{ asset('front_assets/img/project/p1.jpg') }}"
                                    alt="">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ asset('front_assets/img/icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="projects_text">
                                <h4>
                                    <a href="portfolio-details.html">3D Helmet Design</a>
                                </h4>
                                <p>Client Project</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 brand all creative"
                            data-src="{{ asset('front_assets/img/project/p2.jpg') }}">
                            <div class="projects_item">
                                <img class="img-fluid w-100" src="{{ asset('front_assets/img/project/p2.jpg') }}"
                                    alt="">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ asset('front_assets/img/icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="projects_text">
                                <h4>
                                    <a href="portfolio-details.html">2D Vinyl Design</a>
                                </h4>
                                <p>Client Project</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 all" data-src="{{ asset('front_assets/img/project/p3.jpg') }}">
                            <div class="projects_item">
                                <img class="img-fluid w-100" src="{{ asset('front_assets/img/project/p3.jpg') }}"
                                    alt="">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ asset('front_assets/img/icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="projects_text">
                                <h4>
                                    <a href="portfolio-details.html">Creative Poster Design</a>
                                </h4>
                                <p>Client Project</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 all print-mat"
                            data-src="{{ asset('front_assets/img/project/p4.jpg') }}">
                            <div class="projects_item">
                                <img class="img-fluid w-100" src="{{ asset('front_assets/img/project/p4.jpg') }}"
                                    alt="">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ asset('front_assets/img/icon.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="projects_text">
                                <h4>
                                    <a href="portfolio-details.html">Embosed Logo Design</a>
                                </h4>
                                <p>Client Project</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 brand img-man all"
                            data-src="{{ asset('front_assets/img/project/p5.jpg') }}">
                            <div class="projects_item">
                                <img class="img-fluid w-100" src="{{ asset('front_assets/img/project/p5.jpg') }}"
                                    alt="">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ asset('front_assets/img/icon.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="projects_text">
                                <h4>
                                    <a href="portfolio-details.html">3D Disposable Bottle</a>
                                </h4>
                                <p>Client Project</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 brand work img-man all"
                            data-src="{{ asset('front_assets/img/project/p6.jpg') }}">
                            <div class="projects_item">
                                <img class="img-fluid w-100" src="{{ asset('front_assets/img/project/p6.jpg') }}"
                                    alt="">
                                <div class="icon">
                                    <img class="img-fluid" src="{{ asset('front_assets/img/icon.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="projects_text">
                                <h4>
                                    <a href="portfolio-details.html">3D Logo Design</a>
                                </h4>
                                <p>Client Project</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End Recent Completed Project Area ########-->

    <!--######## Start testimonial Area ########-->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('front_assets/img/elements/user1.png') }}"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                                scanner, speaker, projector,
                                hardware.
                            </p>
                            <h4 mt-30>Mark Alviro Wiens</h4>
                            <p class="mb-0">CEO at Google</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('front_assets/img/elements/user2.png') }}"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                                scanner, speaker, projector,
                                hardware.
                            </p>
                            <h4 mt-30>Lina Harrington</h4>
                            <p class="mb-0">CEO at Google</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('front_assets/img/elements/user1.png') }}"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                                scanner, speaker, projector,
                                hardware.
                            </p>
                            <h4 mt-30>Mark Alviro Wiens</h4>
                            <p class="mb-0">CEO at Google</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('front_assets/img/elements/user2.png') }}"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                                scanner, speaker, projector,
                                hardware.
                            </p>
                            <h4 mt-30>Lina Harrington</h4>
                            <p class="mb-0">CEO at Google</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End testimonial Area ########-->

    <!--######## Start Latest Blog Area ########-->
    <section class="latest-blog-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>Latest From Our Blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna
                            aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid w-100" src="{{ asset('front_assets/img/b1.jpg') }}" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <h4>
                        <a href="#">Cooking Perfect Fried Rice in minutes</a>
                    </h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid w-100" src="{{ asset('front_assets/img/b2.jpg') }}" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <h4>
                        <a href="#">Secret of making Heart Shaped eggs</a>
                    </h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid w-100" src="{{ asset('front_assets/img/b3.jpg') }}" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <h4>
                        <a href="#">How to check steak if it is tender or not</a>
                    </h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid w-100" src="{{ asset('front_assets/img/b4.jpg') }}" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <h4>
                        <a href="#">Addiction When Gambling Becomes A Problem</a>
                    </h4>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End Latest Blog Area ########-->
@section('extra_script')
    <script>
        // alert("Hi ..............")
    </script>
@endsection
@endsection
