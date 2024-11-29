@extends('front_layout.app')
@section('content')
    <!--######## Start Latest News Area ########-->
    <section class="latest-news-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        @if (Request::is('portfolio'))
                            <h1>PORTFOLIO</h1>
                        @endif
                        @if (Request::is('services'))
                            <h1>SERVICES</h1>
                        @endif
                        <h4>Inspired by curiosity</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main-title text-center col-12" style="margin-bottom: 15px">
                    {{-- <h4 class="card-title">
                    <a href="#" style="text-decoration: none; color: black">
                        Interiors
                    </a>
                </h4> --}}
                    <h2>Interiors</h2>
                </div>

                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -21.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -22.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -23.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -25.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -26.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -27.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -28.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -29.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -30.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card"style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -31.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -32.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/interior/Template -33.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="main-title text-center col-12 " style="margin-bottom: 15px">
                    <h2>Exteriors</h2>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card" style="margin-bottom: 15px; margin-top: 15px;">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -01.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -02.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6"  style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -03.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;" >
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -06.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -07.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -08.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -09.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -10.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -11.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -13.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -14.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -15.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="main-title text-center col-12" style="margin-bottom: 15px">
                    <h2>Branding</h2>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-06.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-07.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-08.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-09.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-10.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-11.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-13.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-14.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final 02-15.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final T-01.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/branding/Profile Final-02.jpg') }}"
                            alt="Card image cap">
                            <h4 class="card-title text-center">Title</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End Latest News Area ########-->
@endsection
