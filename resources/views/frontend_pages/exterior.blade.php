@extends('front_layout.app')

@section('content')
    <!--######## start banner Area ########-->

    <section class=" relative" id="home">
        <div class="container">
            <img src="{{ asset('front_assets/exterior/cover_photo.jpg') }}" class="img-fluid" alt="Img">

        </div>
        <br>
        <br>
        <div class="col-lg-12">
            <div class=" text-center">
                {{-- <h1>Latest News from all categories</h1> --}}
                <p style=" font-size:20px;">
                    The exterior is a delightful blend of modern conveniences, evoking an inviting ambience and natural
                    feel.<br>
                    A mural, a sculpture or a terracotta plaque can create beautiful facades that tell a story. Landscaping
                    is the <br> finishing touch to your exterior.

                </p>

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
                @foreach ($exteriors as $exterior )
                <div class="col-lg-4 col-md-6" style="margin-bottom: 15px; margin-top: 15px;">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{asset('uploads/pictures/'.$exterior->photo) }}"
                            alt="Card image cap">
                        <h4 class="card-title text-center">{{ $exterior->name }}</h4>
                    </div>
                </div>
                @endforeach

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
