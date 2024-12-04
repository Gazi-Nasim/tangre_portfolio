@extends('front_layout.app')
@section('content')
    <!--######## start banner Area ########-->
    <section class=" relative" id="home">
        <div class="container">
            <img src="{{ asset('front_assets/img/contact_cover.jpg') }}" class="img-fluid" alt="Img">

        </div>
        <br>
        <br>
        <div class="col-lg-12">
            <div class=" text-center">
                <!--<h1>We Here for You 24X7</h1>-->
                <p style=" font-size:20px;">
                    I can't imagine a world without communication. Communication makes our essential desires a <br> reality
                    and creates lasting bonds.
                </p>
            </div>
        </div>
    </section>
    <!--######## Start contact-page Area ########-->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="main-title text-center">
                <h1>CONTACT </h1>

            </div>
            <div class="row contact-wrap">
                <div class="col-3">
                    <h3> Get in Touch With us </h3>
                </div>
                <div class="col-9">
                    <hr>
                </div>
                <br>
                <br>
                <br>
                {{-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> --}}
                <div class="col-lg-6 d-flex flex-column address-wrap">
                    <!--<h5>Call us or whatsapp at 01718 542095, 01914 66 33 11</h5>-->
                    <br>
                    <div class="single-contact-address d-flex flex-row">
                        {{-- <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div> --}}

                        <div class="contact-details">
                            <h4>Our office :</h4>
                            <h5>House: 4th Floor, 427, Road: 30, Mohakhali DOHS, Dhaka-1212.</h5>
                        </div>
                    </div>
                    {{-- <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>01718 542 0956</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div> --}}
                    <div class="single-contact-address d-flex flex-row">
                        {{-- <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div> --}}
                        <div class="contact-details">
                            <h5>info@twsinex.com</h5>
                            <h5>ferdous@twsinex.com</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="form-area text-right" action="{{ route('message.store') }}" method="post">
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
                                <button class="btn" style="float: right; color: gray">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map-wrap " style="width:100%; height: 445px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.5607663453193!2d90.39242997881779!3d23.778686212558725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c726b7c430c9%3A0xcb409ac6eeeac264!2zNDI3IOCmsOCni-CmoSDgpqjgpoIg4Kep4KemLCDgpqLgpr7gppXgpr4gMTIwNg!5e0!3m2!1sbn!2sbd!4v1732947114983!5m2!1sbn!2sbd"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </section>
    <!--######## End contact-page Area ########-->
@section('extra_script')
    <script></script>
@endsection
@endsection
