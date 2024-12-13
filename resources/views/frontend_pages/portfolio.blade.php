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
                    <h2>INTERIOR</h2>
                </div>
                @foreach ($interiors as $item)
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                        <div class="single-news card">

                            <img class="card-top-img" src="{{ asset('uploads/pictures/'.$item->photo ?? '')}}"
                                alt="Card image cap">
                            <h4 class="card-title text-center">{{$item->name}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br><br><br><br>
            <div class="row">
                <div class="main-title text-center col-12 " style="margin-bottom: 15px">
                    <h2>EXTERIOR</h2>
                </div>
                @foreach ($exteriors as $item)
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                        <div class="single-news card">

                            <img class="card-top-img" src="{{ asset('uploads/pictures/'.$item->photo ?? '')}}"
                                alt="Card image cap">
                            <h4 class="card-title text-center">{{$item->name}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br><br><br><br>
            <div class="row">
                <div class="main-title text-center col-12" style="margin-bottom: 15px">
                    <h2>BRANDING</h2>
                </div>
                @foreach ($brandings as $item)
                    <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                        <div class="single-news card">

                            <img class="card-top-img" src="{{ asset('uploads/pictures/'.$item->photo ?? '')}}"
                                alt="Card image cap">
                            <h4 class="card-title text-center">{{$item->name}}</h4>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
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
                </div> --}}
            </div>
        </div>
    </section>
    <!--######## End Latest News Area ########-->
@endsection
