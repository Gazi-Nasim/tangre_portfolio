@extends('front_layout.app')
@section('content')
<!--######## start banner Area ########-->

<!--######## Start contact-page Area ########-->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row contact-wrap">
			<div class="map-wrap " style="width:100%; height: 445px;" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3729613.5816204934!2d89.57086944283782!3d23.278831219933053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1732647632943!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'"
								required=""></textarea>
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
</section>
<!--######## End contact-page Area ########-->
@section('extra_script')
<script>

</script>
@endsection


@endsection
