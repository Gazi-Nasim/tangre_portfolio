@extends('front_layout.app')
@section('content')
    <!--######## start banner Area ########-->


    <!--######## Start Latest News Area ########-->
    <section class="latest-news-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>ABOUT US <br> <span style="font-size: 20px">No One but Us Can Free Our Mind</span> </h1>

                        <br>
                        <br>
                        <p>Yatra originally started in 2017, and on paper in 2019, our journey of creating
                            something new in the amalgamation of design, tradition and culture...

                        </p>
                    </div>
                    <p style="margin-top: -3%; font-size: 16px;" class="text-justify">Our method Working with us is easy, Really listen to the client's needs,
                        create them And producing uniquely, and quite frankly, We give a damn about your success. brand
                        building, With multi-disciplinary creative agency The primary goal of creative offers Strategy and
                        high caliber design assets To help grow your business-whether It is a start up, a new rebranding A
                        current brand, or improved Esta lished brands to convince them Visibly good message to their
                        audience. Using design thinking and logic, We come up with creative strategies-and Execute that
                        strategy - efficiently And clever methods without the usual Design agency fluff or price tag.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="main-title text-center col-12">
                    <h1>TEAM</h1>
                    <h4>Together, Everyone, Achieves, More</h4>
                </div>
                @foreach ($members as $team )

                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('uploads/pictures/'.$team->photo) }}" alt="Card image cap">
                        <img src="../front_assets/img/PP-01.png" alt="">
                        <h4 class="card-title text-center">{{ $team->name }}</h4>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--######## End Latest News Area ########-->


@endsection
