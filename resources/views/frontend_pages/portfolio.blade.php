@extends('front_layout.app')
@section('content')

<!--######## start banner Area ########-->
<section class="banner-area relative" id="home">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white text-uppercase">
					Portfolio
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="portfolio.html">
						Portfolio</a></p>
			</div>
		</div>
	</div>
</section>
<!--######## End banner Area ########-->

<!--######## Start Recent Completed Project Area ########-->
<section class="recent-completed-project section-gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="main-title text-center">
					<h1>Our Recent Completed Projects</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						aliqua.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="filters project-filter">
					<ul>
						<li class="active" data-filter=".all">All Categories</li>
						<li data-filter=".brand">Branding</li>
						<li data-filter=".img-man">Image Manipulation</li>
						<li data-filter=".creative">Creative Work</li>
						<li data-filter=".web">Web Design</li>
						<li data-filter=".print-mat">Print Material</li>
					</ul>
				</div>
				<div class="projects_inner row" id="lightgallery">
					<div class="col-lg-4 col-sm-6 web all" data-src="img/project/p1.jpg">
						<div class="projects_item">
							<img class="img-fluid w-100" src="img/project/p1.jpg" alt="">
							<div class="icon">
								<img class="img-fluid" src="img/icon.png" alt="">
							</div>
						</div>
						<div class="projects_text">
							<h4>
								<a href="portfolio-details.html">3D Helmet Design</a>
							</h4>
							<p>Client Project</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 brand all creative" data-src="img/project/p2.jpg">
						<div class="projects_item">
							<img class="img-fluid w-100" src="img/project/p2.jpg" alt="">
							<div class="icon">
								<img class="img-fluid" src="img/icon.png" alt="">
							</div>
						</div>
						<div class="projects_text">
							<h4>
								<a href="portfolio-details.html">2D Vinyl Design</a>
							</h4>
							<p>Client Project</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 all" data-src="img/project/p3.jpg">
						<div class="projects_item">
							<img class="img-fluid w-100" src="img/project/p3.jpg" alt="">
							<div class="icon">
								<img class="img-fluid" src="img/icon.png" alt="">
							</div>
						</div>
						<div class="projects_text">
							<h4>
								<a href="portfolio-details.html">Creative Poster Design</a>
							</h4>
							<p>Client Project</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 all print-mat" data-src="img/project/p4.jpg">
						<div class="projects_item">
							<img class="img-fluid w-100" src="img/project/p4.jpg" alt="">
							<div class="icon">
								<img class="img-fluid" src="img/icon.png" alt="">
							</div>
						</div>
						<div class="projects_text">
							<h4>
								<a href="portfolio-details.html">Embosed Logo Design</a>
							</h4>
							<p>Client Project</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 brand img-man all" data-src="img/project/p5.jpg">
						<div class="projects_item">
							<img class="img-fluid w-100" src="img/project/p5.jpg" alt="">
							<div class="icon">
								<img class="img-fluid" src="img/icon.png" alt="">
							</div>
						</div>
						<div class="projects_text">
							<h4>
								<a href="portfolio-details.html">3D Disposable Bottle</a>
							</h4>
							<p>Client Project</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 brand work img-man all" data-src="img/project/p6.jpg">
						<div class="projects_item">
							<img class="img-fluid w-100" src="img/project/p6.jpg" alt="">
							<div class="icon">
								<img class="img-fluid" src="img/icon.png" alt="">
							</div>
						</div>
						<div class="projects_text">
							<h4>
								<a href="portfolio-details.html">3D Logo Design</a>
							</h4>
							<p>Client Project</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--######## End Recent Completed Project Area ########-->
@endsection