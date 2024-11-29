@extends('front_layout.app')

@section('css')
    <style>
        .labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 14px;
        }

        .label {
            flex: 1;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <!--######## start banner Area ########-->
    <section class=" relative" id="home">
        <div class="container">
            <img src="{{ asset('front_assets/img/home_page_cover_photo.jpg') }}" class="img-fluid" alt="Img">
            {{-- <div class="row fullscreen d-flex align-items-center"> --}}
            {{-- <div class="banner-content col-lg-9 col-md-12">
                    <h1>
                        Creativity <br> Beyond <br> Life
                    </h1>
                    <a href="#" class="primary-btn header-btn text-capitalize mt-10">hire us now!</a>
                </div> --}}
            {{-- </div> --}}
        </div>
        <br>
        <br>
        <div class="col-lg-12">
            <div class=" text-center">
                {{-- <h1>Latest News from all categories</h1> --}}
                <p style=" font-size:20px;">
                    The Work Station is a luxury full-service Interior-Exterior &
                    Design firm. Built on reputation,<br>
                    service and design acumen, workstation uses its extensive knowledge and <br>
                    experience to transform your needs into a luxurious Space.

                </p>
            </div>
        </div>
    </section>

    {{-- <!--######## End banner Area ########--> --}}

    {{-- <!--######## Start Latest News Area ########--> --}}
    <section class="latest-news-area section-gap">
        <div class="container">
            <div class="justify-content-center">

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>SERCIVES <br> <span style="font-size: 20px;">We love what we do</span></h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/celling.png') }}"
                            alt="Card image cap">
                        <div class="card-body ">
                            <h4 class="card-title text-center design-title">
                                <a href="{{ url('interior') }}">
                                    INTERIOR
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;"
                            src="{{ asset('front_assets/img/Wooden work.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="{{ url('exterior') }}">
                                    EXTERIOR
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;"
                            src="{{ asset('front_assets/img/Branding Banner.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="{{ url('branding') }}">
                                    BRANDING
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End Latest News Area ########-->

    <!--######## Start Recent Completed Project Area ########-->
    <section class="recent-completed-project section-gap" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>Be it Residential-Commercial or any Product</h1>
                        <h3>We will Set A to Z</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="{{ url('interior') }}">
                                    INTERIOR
                                    <hr>
                                </a>
                            </h4>
                            <p class="card-text text-justify">We try to capture the play of light and air in your room
                                keeping the
                                necessary aspect of your room.
                                <br>
                                To give a good feeling to all who come and we are ready to take responsibility for your day
                                and work place to be tidy and beautiful.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="{{ url('exterior') }}">
                                    EXTERIOR
                                    <hr>
                                </a>
                            </h4>
                            <p class="card-text text-justify">
                                The exterior is a delightful blend of modern conveniences, evoking an inviting ambience and
                                natural feel.
                                <br>
                                A mural, a sculpture or a terracotta plaque can create beautiful facades that tell a story.
                                Landscaping is the finishing touch to your exterior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="{{ url('branding') }}">
                                    BRANDING
                                    <hr>
                                </a>
                            </h4>
                            <p class="card-text; text-justify">
                                Working with us is easy…, Using design thinking and logic, We come up with creative
                                strategies.
                                <br>

                                We really listen to the client's needs, create them And to produce uniquely, and quite
                                frankly, We give you a suggestion about your success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Choose us area start --}}
    <section class="recent-completed-project section-gap" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class=" text-center">
                        <h1>WHY CHOOSE US</h1>
                        <br>
                        <P class="text-justify">
                            At the Work Station, we merge creativity with functionality to craft captivating interior and
                            exterior designs alongside compelling brand communication. With a commitment to innovation,
                            attention to detail, and a collaborative approach, we ensure your vision is realized to
                            perfection. Experience our holistic solutions, transparent communication, and dedication to
                            customer satisfaction. Let's elevate your space and brand together.
                        </P>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- ened Choose us area start --}}

    {{-- Start working process area --}}
    <section class="recent-completed-project section-gap" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="main-title text-center">
                        <h3>Here is our working process for your information</h3>
                        <img class="img-fluid" style="margin-top: -40px;"
                            src="{{ asset('front_assets/img/progress_bar.png') }}" alt="working process image">
                        <div class="labels">
                            <div class="label">Meet and Greet</div>
                            <div class="label">Create Design</div>
                            <div class="label">Your Consent</div>
                            <div class="label">Start of Work</div>
                            <div class="label">Hand Over</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End working process area --}}

    {{-- Start working process area --}}
    <section class="recent-completed-project section-gap" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="div" style="border: 2px solid gray;">
                        <div class="div" style="padding: 55px;">
                            <img class="img-fluid" src="{{ asset('front_assets/img/design_picture_.jpg') }}"
                                alt="">

                        </div>

                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">
                            <a href="{{ url('branding') }}" class="btn" style="color: gray; border: 2px solid gray;">
                                EXCLUSIVE SHOP
                            </a>
                        </h4>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- End working process area --}}

@section('extra_script')
    <script>
        // alert("Hi ..............")
    </script>
@endsection
@endsection
