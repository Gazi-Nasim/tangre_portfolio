@extends('front_layout.app')
@section('content')
    <!--######## start banner Area ########-->


    <!--######## Start Latest News Area ########-->
    <section class="latest-news-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-title text-center">
                        <h1>ABOUT US</h1>
                        <h4>No One but Us Can Free Our Mind</h4>
                        <br>
                        <br>
                        <p>Yatra originally started in 2017, and on paper in 2019, our journey of creating
                            something new in the amalgamation of design, tradition and culture...

                        </p>
                    </div>
                    <p style="margin-top: -3%;">Our method Working with us is easy, Really listen to the client's needs,
                        create them And producing uniquely, and quite frankly, We give a damn about your success. brand
                        building, With multi-disciplinary creative agency The primary goal of creative offers Strategy and
                        high caliber design assets To help grow your business-whether It is a start up, a new rebranding A
                        current brand, or improved Esta lished brands to convince them Visibly good message to their
                        audience. Using design thinking and logic, We come up with creative strategies-and Execute that
                        strategy - efficiently And clever methods without the usual Design agency fluff or price tag.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="main-title text-center col-12">
                    <h1>Team</h1>
                    <h4>Together, Everyone, Achieves, More</h4>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-01.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Ferdous</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-02.png') }}" alt="Card image cap"
                            alt="Card image cap">
                        <h4 class="card-title text-center">Afzal</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-03.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Sumon</h4>

                        {{-- <div class="card-body">
						<h4 class="card-title">
							<a href="#">
								Life Advice Looking At Window
							</a>
						</h4>
						<p class="card-text">It is a good idea to think of your PC as an office. It stores files, programs, pictures. This
							can be compared to an actual.</p>
					</div> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-05.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Morshed</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-06.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Akram </h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-07.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Hemal</h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-08.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Aminul </h4>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-news card">
                        <img class="card-top-img" src="{{ asset('front_assets/img/PP-09.png') }}" alt="Card image cap">
                        <h4 class="card-title text-center">Musfik </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--######## End Latest News Area ########-->

    <!--######## Start contact-page Area ########-->
    {{-- <section class="contact-page-area section-gap">
        <div class="container">
            <div class="main-title text-center">
                <h1>Contact US</h1>
            </div>
            <div class="row contact-wrap">

                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                <div class="col-lg-3 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Los Angeles, USA</h5>
                            <p>
                                56/8, Rocky beach road
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>00 (440) 9865 562</h5>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>support@colorlib.com</h5>
                            <p>Send us your query</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                                    required="" type="text">

                                <input name="email" placeholder="Enter email address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    class="common-input mb-20 form-control" required="" type="email">
                                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"
                                    required="" type="text">
                            </div>
                            <div class="col-lg-6">
                                <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
                            </div>
                            <div class="col-lg-12 mt-30">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="primary-btn primary" style="float: right;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!--######## End contact-page Area ########-->
@endsection
