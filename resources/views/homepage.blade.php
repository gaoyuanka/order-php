@extends('layout')
@section('content')
    <div class="main-wrapper">
        <!-- Start Feature Area -->
        <section class="featured-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="feature-left">
                            <h2>
                                Reasons To <br>
                                <span>Choose</span> Notebook
                            </h2>
                            <p>
                                Here, I focus on a range of items and features that we use in life without giving them a
                                second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco.
                            </p>
                            <button class="primary-btn hover d-inline-flex align-items-center"><span
                                    class="mr-10">Get Started</span><span
                                    class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-right active-feature-carousel">
                            <div class="single-slider item">
                                <img src="img/slider.jpg" alt="">
                            </div>
                            <div class="single-slider item">
                                <img src="img/slider.jpg" alt="">
                            </div>
                            <div class="single-slider item">
                                <img src="img/slider.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Area -->
        <!-- Start parallux Area -->
        <section class="parallux-area pt-100 pb-100 relative" data-parallax="scroll" data-image-src="img/parallux-bg.jpg">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <h2>
                            Reasons To <br>
                            <span>Choose</span> Notebook
                        </h2>
                        <p>
                            Here, I focus on a range of items and features that we use in life without giving them a second
                            thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco.
                        </p>
                        <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get
                                Started</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End parallux Area -->
        <!-- Start service Area -->
        <section class="service-area">
            <div class="container">
                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-md-6">
                            <div class="single-service" style="background: url(img/{{ $blog->bg_img }});">
                                <div class="overlay overlay-content">
                                    <h4 class="text-uppercase">{{ $blog->title }}</h4>
                                    <p>{{ $blog->created_at->format('Y.m.d') }}</p>
                                    <p>
                                        {{ $blog->excerpt }}
                                    </p>
                                    {{-- <a href="/blogs/{{ $blog->id }}" class="button alt">learn more</a> --}}
                                    <a href="{{ $blog->path }}" class="button alt">learn more</a> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-6">
							<div class="single-service" style="background: url(img/s1.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s2.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s3.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s4.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div> --}}
                </div>
            </div>
        </section>
        <!-- End service Area -->


    @endsection
