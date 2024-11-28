@extends('front_layout.app')

@section('content')
    <!--######## start banner Area ########-->
    <section class=" " id="home">
        <div class="container">
            <img src="{{ asset('front_assets/exterior/cover_photo.jpg') }}" class="img-fluid" alt="Img">
            <div class="justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        {{-- <h1>Latest News from all categories</h1> --}}
                        <p>
                            The Work Station is a luxury full-service Interior-Exterior &
                            Design firm. Built on reputation,
                            service and design acumen, workstation uses its extensive knowledge and
                            experience to transform your needs into a luxurious Space.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!--######## Start Exterior Area ########--> --}}
    <section class="latest-news-area section-gap" style="margin-top: 0%">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>EXTERIOR</h1>
                        <h3>We love what we do</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/exterior/Template -01.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -02.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -03.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -06.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -07.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -08.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -09.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -10.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -11.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -13.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -14.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -15.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -16.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -17.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -18.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -19.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -20.jpg') }}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img"  src="{{ asset('front_assets/exterior/Template -24.jpg') }}" alt="Card image cap">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End exterior Area ########-->



@section('extra_script')
    <script>
        // alert("Hi ..............")
    </script>
@endsection
@endsection
