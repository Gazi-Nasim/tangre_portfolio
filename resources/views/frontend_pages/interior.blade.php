@extends('front_layout.app')

@section('content')
    <!--######## start banner Area ########-->

    <section class=" relative" id="home">
        <div class="container">
            <img src="{{ asset('uploads/general/'.$generals[0]->interior_cover_photo) }}" class="img-fluid" alt="Img">

        </div>
        <br>
        <br>
        <div class="col-lg-12">
            <div class=" text-center">
                {{-- <h1>Latest News from all categories</h1> --}}
                <p style=" font-size:20px;">
                    Workstation is a full-service interior design agency. Design, planning, sourcing, installation <br>
                    and styling are included. You can count on us to reduce costly mistakes and save you energy and time
                    <br> during a renovation, construction or decorating project.

                    <!--Working with us is easy…, Using design thinking and logic, We come up with creative strategies<br>-->
                    <!--We really listen to the client's needs, create them And to produce uniquely, and quite frankly,<br> We give you a suggestion about your success.-->

                </p>
            </div>
        </div>
    </section>

    {{-- <!--######## Start Interior Area ########--> --}}
    <section class="latest-news-area section-gap" style="margin-top: 0%">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>INTERIOR</h1>
                        <h3>We love what we do</h3>
                    </div>
                </div>
            </div>
            
            <div class="row">
                @foreach ( $interiors as $interior )
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('uploads/pictures/'.$interior->photo) }}"
                            alt="Card image cap">
                        <h4 class="card-title text-center">{{ $interior->name }}</h4>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--######## End Interior Area ########-->



@section('extra_script')
    <script>
        // alert("Hi ..............")
    </script>
@endsection
@endsection
