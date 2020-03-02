<?php 
	$home = "yes";
    $slick = "yes"; 
    $instagram_feed = 'yes';
    $wow = 'yes';
	include_once('includes/header.php'); 
?>
    <div class="fullscreen-image fs-image" style="background-image: url('assets/images/sliders/slider1.jpg');">
        <div class="carousel-content pt-50">
            <div class="container container-1280">
                <div id="home-carousel" class="carousel carousel-fade home-carousel slide" data-ride="carousel">
                    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                        <i class="icofont-circled-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                        <i class="icofont-circled-right"></i>
                        <span class="sr-only">Next</span>
                    </a>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.depasqualethespa.com/images/slider/bridal-brunch-web-slider-tickets.jpg" class="d-block w-100" alt="Bridal Brunch">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.depasqualethespa.com/images/slider/HydraFacial-Banner.jpg" class="d-block w-100" alt="Slider2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.depasqualethespa.com/images/slider/webslider.jpg" class="d-block w-100" alt="Slider3">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.depasqualethespa.com/images/slider/Web-Slider-resized.jpg" class="d-block w-100" alt="Slider 4">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.depasqualethespa.com/images/slider/web-slider.jpg" class="d-block w-100" alt="Slider 5">
                        </div>
                    </div>
                    <ol class="carousel-indicators position-static mt-30 d-none">
                        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#home-carousel" data-slide-to="1"></li>
                        <li data-target="#home-carousel" data-slide-to="2"></li>
                        <li data-target="#home-carousel" data-slide-to="3"></li>
                        <li data-target="#home-carousel" data-slide-to="4"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome-section">
        <div class="container">
            <div class="welcome-section__content">
                <!-- <img class="logo--150" src="assets/images/spa-2x.png" alt="Depasquale The Spa"> -->
                <h2 class="mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0">Welcome to<br> Award Winning Salon & Spa.</h2>
                <p class="mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Everybody is looking for places where to relax and get more energy. In our wellness center silence, energy, beauty and vitality meet. The treatments we offer will refresh both your body and soul. We'll be glad to welcome you and recommend our facilities and services.</p>
                 
                <a class="btn btn-lg btn-outline-dark hvr-sweep-to-right wow fadeInUp" href="#" data-wow-duration="1s" data-wow-delay="0.4s">View Services</a>
            </div>
        </div>
    </div>

    <div class="service-section">
        <div class="container">
            <div class="service-section__top">
                <div class="row no-gutters">
                    <div class="col-md-4 service-col my-30 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="service-col__inner">
                            <div class="service-col__icon d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/services/facial.jpg" alt="The Spa">
                            </div>
                            <div class="service-col__info">
                                <h3>The Spa</h3>
                                <p>Ipsum has been the industry's standard text ever since the 1500s</p>
                                <a href="#" class="btn hvr-icon-forward d-inline-flex align-items-center">Learn More <i class="icofont-long-arrow-right font-20 ml-5 hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 service-col wow fadeInUp" data-wow-duration="1.5s">
                        <div class="service-col__inner">
                            <div class="service-col__icon d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/services/hair.jpg" alt="The Salon">
                            </div>
                            <div class="service-col__info">
                                <h3>The Salon</h3>
                                <p>Ipsum has been the industry's standard text ever since the 1500s</p>
                                <a href="#" class="btn hvr-icon-forward d-inline-flex align-items-center">Learn More <i class="icofont-long-arrow-right font-20 ml-5 hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 service-col my-30 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="service-col__inner">
                            <div class="service-col__icon d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/services/nails.jpg" alt="Nail Services">
                            </div>
                            <div class="service-col__info">
                                <h3>Nail Services</h3>
                                <p>Ipsum has been the industry's standard text ever since the 1500s</p>
                                <a href="#" class="btn hvr-icon-forward d-inline-flex align-items-center">Learn More <i class="icofont-long-arrow-right font-20 ml-5 hvr-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-section__middle wow fadeInUp" data-wow-duration="1.5s">
                <p class="mb-30">Everybody is looking for places where to relax and get more energy. In our wellness center silence, energy, beauty and vitality meet. The treatments we offer will refresh both your body and soul. We'll be glad to welcome you and recommend our facilities and services.</p>
                <!-- <a href="#" class="btn btn-light-2">View More Services</a> -->
            </div>
        </div>
    </div>

    <div class="featured-section">
        <div class="container">
            <div class="featured-section__inner">
                <div class="row">
                    <div class="col-md-4">
                        <div class="featured-col wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <a href="#" class="featured-col__image">
                                <img src="assets/images/bridal_home.jpg" alt="Depasquale Bridal" class="img-fluid">
                            </a>
                            <div class="featured-col__info p-25">
                                <h3 class="mb-15">Depasquale Bridal</h3>
                                <p class="mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the industry's standard text ever since the 1500s</p>
                                <div class="featured-col__action">
                                    <a href="#" class="btn btn-outline-dark hvr-sweep-to-right d-inline-flex align-items-center">Learn More <i class="icofont-long-arrow-right font-20 ml-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-col wow fadeInUp" data-wow-duration="1.5s">
                            <a href="#" class="featured-col__image">
                                <img src="assets/images/experience_home.jpg" alt="Experiences & Packages" class="img-fluid">
                            </a>
                            <div class="featured-col__info p-25">
                                <h3 class="mb-15">Experiences & Packages</h3>
                                <p class="mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the industry's standard text ever</p>
                                <div class="featured-col__action">
                                    <a href="#" class="btn btn-outline-dark hvr-sweep-to-right d-inline-flex align-items-center">Learn More <i class="icofont-long-arrow-right font-20 ml-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-col wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <a href="#" class="featured-col__image">
                                <img src="assets/images/event_home.jpg" alt="Events & Promotions" class="img-fluid">
                            </a>
                            <div class="featured-col__info p-25">
                                <h3 class="mb-15">Events & Promotions</h3>
                                <p class="mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the text ever since the 1500s</p>
                                <div class="featured-col__action">
                                    <a href="#" class="btn btn-outline-dark hvr-sweep-to-right d-inline-flex align-items-center">Learn More <i class="icofont-long-arrow-right font-20 ml-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="testimonial-carousel wow fadeIn" data-wow-duration="1.5s">
                <div class="testimonial-row p-50">
                    <h3 class="mb-20">Another perfect night at The Spa</h3>
                    <div class="mb-50">&ldquo;I had a Pedicure with Tina that was amazing. It was very relaxing, and my feet felt fabulous. The manicure was perfect too!&rdquo;</div>
                    <p class="testimonial__author">&mdash; Lenore</p>
                </div>
                <div class="testimonial-row p-50">
                    <h3 class="mb-20">Great service!</h3>
                    <div class="mb-50">&ldquo;I got a prenatal massage and I would highly recommended it. I can’t wait to go back for another one! It was an overall great experience and great customer service from walking into the salon.&rdquo;</div>
                    <p class="testimonial__author">&mdash; Jaclyn</p>
                </div>
                <div class="testimonial-row p-50">
                    <h3 class="mb-20">Awesome</h3>
                    <div class="mb-50">&ldquo;KimAnn is meticulous with my color and cut. I always leave feeling pampered and my hair looks shiny and healthy. Thank you!!&rdquo;</div>
                    <p class="testimonial__author">&mdash; Barbara</p>
                </div>
                <div class="testimonial-row p-50">
                    <h3 class="mb-20">Love my hair!</h3>
                    <div class="mb-50">&ldquo;Just got a new cut - and just like all the services - it was top notch! I just love coming to the spa- it's soooooo relaxing!&rdquo;</div>
                    <p class="testimonial__author">&mdash; Valerie</p>
                </div>
                <div class="testimonial-row p-50">
                    <h3 class="mb-20">Katie is amazing!</h3>
                    <div class="mb-50">&ldquo;She knows what I want better than I know myself! She is a top notch stylist with excellence in both color and cuts. Highly recommend!&rdquo;</div>
                    <p class="testimonial__author">&mdash; Louise</p>
                </div>
            </div>
        </div>
    </div><!--/Featured Section -->

    <div class="package-section">
        <div class="container">
            <div class="section-head mb-50 text-center">
                <h2>Experiences & Packages</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 package-col service-col my-30 wow fadeInDown" data-wow-duration="1.5s">
                    <div class="service-col__inner">
                        <div class="service-col__icon d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="assets/images/pakage-2.jpg" alt="The Spa">
                        </div>
                        <div class="service-col__info">
                            <h4 class="mb-10">A Day At DePasquale</h4>
                            <p>A exquisite experience of our massage service performed in our signature suite.</p>
                            <div class="package-col__price mb-30">$337</div>
                            <a href="#" class="btn btn-lg btn-dark">Buy Gift Card</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 package-col service-col wow fadeInUp" data-wow-duration="1.5s">
                    <div class="service-col__inner">
                        <div class="service-col__icon d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="assets/images/pakage-1.jpg" alt="The Salon">
                        </div>
                        <div class="service-col__info">
                            <h4 class="mb-10">Warm Stone Splendor</h4> 
                            <p>A exquisite experience of our massage service performed in our signature suite.</p>
                            <div class="package-col__price mb-30">$261</div>
                            <a href="#" class="btn btn-lg btn-dark">Buy Gift Card</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 package-col service-col my-30 wow fadeInDown" data-wow-duration="1.5s">
                    <div class="service-col__inner">
                        <div class="service-col__icon d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="assets/images/pakage-3.jpg" alt="Nail Services">
                        </div>
                        <div class="service-col__info">
                            <h4 class="mb-10">Refresh & Relax</h4>
                            <p>A exquisite experience of our massage service performed in our signature suite.</p>
                            <div class="package-col__price mb-30">$217</div> 
                            <a href="#" class="btn btn-lg btn-dark">Buy Gift Card</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-50 pt-20 text-center">
                <a href="#" class="btn btn-lg btn-outline-dark hvr-sweep-to-right d-inline-flex align-items-center">More Packages <i class="icofont-long-arrow-right font-20 ml-10"></i></a>
            </div>
        </div>
    </div><!--/Package Section -->

    <div class="gift-card-section">
        <div class="container">
            <div class="gift-card__inner">
                <h2 class="mb-5">Gift Card</h2>
                <p class="mb-20">Easy &bull; Convenient &bull; Stress-Free</p>
                <div class="gift-card__action">
                    <a class="btn btn-outline-dark hvr-sweep-to-right" href="#">Classic</a>
                    <span>or</span>
                    <a class="btn btn-outline-dark hvr-sweep-to-right" href="#">E-Gift Card</a>
                </div>
            </div>    
        </div>
    </div><!--/Gift Card Section -->

    <div class="more-service-section">
        <div class="container">
            <div class="row align-items-center mb-50">
                <div class="col-md-6">
                    <div class="block-carousel wow fadeInUp" data-wow-duration="1.5s">
                        <div class="block-carousel__item">
                            <img class="img-fluid" src="assets/images/service_slider-1.jpg" alt="Facials">
                        </div>
                        <div class="block-carousel__item">
                            <img class="img-fluid" src="assets/images/service_slider-2.jpg" alt="Massage Therapies">
                        </div>
                        <div class="block-carousel__item">
                            <img class="img-fluid" src="assets/images/service_slider-3.jpg" alt="Exfoliation">
                        </div>
                        <div class="block-carousel__item">
                            <img class="img-fluid" src="assets/images/service_slider-4.jpg" alt="Waxing">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ms__content section-head pl-50">
                        <h2 class="mb-30 wow fadeInUp" data-wow-duration="1.5s">Skin Care<br> and Face Masks</h2>
                        <p class="mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">We offer a variety of facial services to suit your individual skin care needs. Our estheticians use only the finest Bioelements products based on trace minerals, essential oils, and plant extracts. Every facial includes a skin analysis, deep pore cleansing, gentle exfoliation, customized mask, and moisture treatment.</p>
                        <a href="#" class="btn px-0 d-inline-flex hvr-icon-forward align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">Learn More <i class="icofont-long-arrow-right font-18 ml-10 hvr-icon"></i></a>
                    </div>
                </div>
            </div>

            <div class="row pt-50">
                <div class="col-md-3">
                    <div class="ms-item text-center px-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                        <h4 class="mb-15">Facials</h4>
                        <p>Our facials include a skin analysis to help individualize each facial to your unique needs.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ms-item text-center px-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <h4 class="mb-15">Massage Therapies</h4>
                        <p>Our range of massage therapies will provide you with overall mind and body relaxation.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ms-item text-center px-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <h4 class="mb-15">Exfoliation</h4>
                        <p>A mixture of Cures Sea Salt and essential oils are used to exfoliate and remove dead skin cells.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ms-item text-center px-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <h4 class="mb-15">Waxing</h4>
                        <p>We offer complete waxing from head to toe and leave your skin exfoliated and soft for weeks at a time.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="instagram-section">
		<div class="container-fluid">
            <div class="instagram__head">
                 <i class="icofont-instagram"></i>
			     <h3>#depasqualethespa</h3>
            </div>
			 
            <div class="instafeed">
    			<div id="i__grid" class="i__grid">
    				<div class="d-flex justify-content-center wp100">
    					<img class="w75" src="assets/images/spinner.svg" alt="Loading..">
    				</div>
    			</div>
            </div>

			<div class="instafeed__action">
                <a target="_blank" href="https://www.instagram.com/depasqualethespa/" class="btn btn-lg btn-outline-dark hvr-sweep-to-right"><i class="icofont-instagram"></i> View Gallery</a>
			</div>
		</div>
    </div>
    
    <div class="newsletter-section">
        <div class="container">
            <form action="">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="section-head">
                        <h2>Newsletter</h2>
                        <p class="mb-0">Subscribe to our newsletter to receive the latest information!</p>
                    </div>
                    <div class="newsletter-field-row d-flex">
                        <input type="text" class="form-control form-control-lg" placeholder=" Your Email Address">
                        <button class="btn d-flex align-items-center hvr-icon-forward px-15">Subscribe <i class="icofont-long-arrow-right hvr-icon font-20 ml-10"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include_once('includes/footer.php'); ?>