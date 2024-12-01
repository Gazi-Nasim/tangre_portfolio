@extends('front_layout.app')
@section('content')
<!--######## start banner Area ########-->

<!--######## Start contact-page Area ########-->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="main-title text-center">
            <h1>CONTACT </h1>

        </div>
        <div class="row contact-wrap">
            <div class="col-3"><h3> Get in Touch With us </h3></div>
            <div class="col-9">
                <hr>
            </div>
            <br>
            <br>
            <br>
            {{-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> --}}
            <div class="col-lg-6 d-flex flex-column address-wrap">
                <h5>Call us or whatsapp at 01718 542095, 01914 66 33 11</h5>
                <br>
                <div class="single-contact-address d-flex flex-row">
                    {{-- <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div> --}}

                    <div class="contact-details">
                        <h5>Our office :</h5>
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
                        <h5>info.tws@gmail.com</h5>
                        <h5>ferdous.tws@gmail.com</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
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
                            <button class="btn" style="float: right; color: gray">SEND</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="map-wrap " style="width:100%; height: 445px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3729613.5816204934!2d89.57086944283782!3d23.278831219933053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1732647632943!5m2!1sen!2sbd"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!--######## End contact-page Area ########-->
@section('extra_script')
<script>

</script>
@endsection


@endsection
