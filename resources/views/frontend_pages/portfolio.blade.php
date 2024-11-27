@extends('front_layout.app')
@section('content')

<!--######## Start Latest News Area ########-->
<section class="latest-news-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h1>PORTFOLIO</h1>
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
                <h2>Interiors</h2>
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
        <br>
        <br>
        <div class="row">
            <div class="main-title text-center col-12 " style="margin-bottom: 15px">
                <h2>Exteriors</h2>
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
        <br>
        <div class="row">
            <div class="main-title text-center col-12" style="margin-bottom: 15px">
                <h2>Branding</h2>
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
