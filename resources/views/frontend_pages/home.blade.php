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

    {{-- <!--######## End banner Area ########--> --}}

    {{-- <!--######## Start Latest News Area ########--> --}}
    <section class="latest-news-area section-gap">
        <div class="container">
            <div class="justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>Latest News from all categories</h1>
                        <p>
                            <strong style="font-size: 20px"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do
                                eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.</strong>
                        </p>
                    </div>
                </div>
            </div>
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
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/celling.png') }}"
                            alt="Card image cap">
                        <div class="card-body ">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Interior Design
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/Wooden work.png') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Exterior Design
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" style="height: 600px;" src="{{ asset('front_assets/img/Branding Banner.png') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Brianding
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
                        <h1>Be it Residential , Commercial or any Project</h1>
                        <h3>We will set any project up for you.</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Interior Design
                                    <hr>
                                </a>
                            </h4>
                            <p class="card-text">It is a good idea to think of your PC as an office. It stores files,
                                programs, pictures. This
                                can be compared to an actual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Exterior Design
                                    <hr>
                                </a>
                            </h4>
                            <p class="card-text">It is a good idea to think of your PC as an office. It stores files,
                                programs, pictures. This
                                can be compared to an actual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                <a href="#">
                                    Branding Design
                                    <hr>
                                </a>
                            </h4>
                            <p class="card-text">It is a good idea to think of your PC as an office. It stores files,
                                programs, pictures. This
                                can be compared to an actual.</p>
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
                    <div class="main-title text-center">
                        <h1>Why choose us</h1>

                    </div>
                    <P> <strong>
                        At the Work Station, we merge creativity with functionality to craft captivating interior and exterior designs alongside compelling brand communication. With a commitment to innovation, attention to detail, and a collaborative approach, we ensure your vision is realized to perfection. Experience our holistic solutions, transparent communication, and dedication to customer satisfaction. Let's elevate your space and brand together.
                        </strong> </P>
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
                        <h1>Here is our working process for your information</h1>
                    </div>
                    <img class="img-fluid" src="{{ asset('front_assets/img/progress_bar.png') }}" alt="">
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
    </section>
    {{-- End working process area --}}

    {{-- Start working process area --}}
    <section class="recent-completed-project section-gap" style="padding-top: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="div" style="border: 6px solid gray;">
                        <div class="div" style="border: 6px solid gray; padding: 10px">
                            <img class="img-fluid" src="{{ asset('front_assets/img/design_picture_.jpg') }}" alt="">
                        </div>
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
