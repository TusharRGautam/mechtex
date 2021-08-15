<?php 
include("header.php");
?>
  <!-- ======= hero Section ======= -->
  <style>
    #hero1 {
    width: 100%;
    height: 418px;
    position: relative;
    background-color: #ffffff;
    background-size: cover;
    padding: 0;
}
@media (min-width: 1200px){
#hero1 .container {
    max-width: 100% !important;
}
}
  video.vdo {
    object-fit: cover;
    object-position: center center;
	background-color: var(--fill-layer-background-overlay-color);
    position: var(--fill-layer-background-overlay-position);
    opacity: var(--fill-layer-background-overlay-blend-opacity-fallback,1);
    transform: var(--fill-layer-background-overlay-transform);
	padding-left: 0 !important;
    padding-right: 0 !important;
}</style>
  <section id="hero1">
	<div class="container">
      <div class="row" >
		<video class="vdo" width="100%" height="440" controls="" autoplay="" muted="">
		  <source src="assets/video/1_1.mp4" type="video/mp4">
		  <source src="assets/video/1_1.mp4" type="video/mp4">
		</video>
      </div>
    </div>
    <!-- <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
      </div>
    </div> -->

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Welcome to Mechtex</h2>
            <h3>MECHTEX is a manufacturer and exporter of Synchronous Motors, Stepper Motors, Reduction Gear Heads,
              Linear Actuators, DC Geared Motors, Brushless DC Motors and Controller since 1967</h3>

            <ul>
              <li><i class="bi bi-check-circle"></i> MECHTEX is an ISO 9001:2015 ensured association</li>
              <li><i class="bi bi-check-circle"></i> We have consistently has been a consumer friendly portalfor cost
                productive product</li>
                
                 <li><i class="bi bi-check-circle"></i> Our items are UL and CE endorsed which were accomplished with
                reliable quality and persistent R and D.</li>
              <li>
                 <!-- <i class="bi bi-check-circle"></i> -->
                </li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <!--<p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
            export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
            irure minim illum fore</p>-->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
             <!-- <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>-->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>BLDC MOTORS</h4>
              <p>BLDC MOTORS</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="BLDC MOTORS"><i class="bx bx-plus"></i></a>
              <a href="https://www.com/bldc-motors" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SYNCHRONOUS MOTORS</h4>
              <p>SYNCHRONOUS MOTORS</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="SYNCHRONOUS MOTORS"><i class="bx bx-plus"></i></a>
              <a href="https://www.com/synchronous-motors" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>HYBRID STEPPER MOTOR</h4>
              <p>HYBRID STEPPER MOTOR</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="HYBRID STEPPER MOTOR"><i class="bx bx-plus"></i></a>
              <a href="https://www.com/hybrid-stepper-motor" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>STEPPER MOTORS</h4>
              <p>STEPPER MOTORS</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="STEPPER MOTORS"><i class="bx bx-plus"></i></a>
              <a href="https://www.com/stepper-motors" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>REDUCTION GEARHEAD</h4>
              <p>REDUCTION GEARHEAD</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="REDUCTION GEARHEAD"><i class="bx bx-plus"></i></a>
              <a href="https://www.com/reduction-gearhead" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>DC GEARED MOTORS</h4>
              <p>DC GEARED MOTORS</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="DC GEARED MOTORS"><i class="bx bx-plus"></i></a>
              <a href="https://www.com/dc-geared-motors" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!--<div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>-->

        </div>

      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>INDUSTRIES SERVED</h2>
          <!--<p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
            export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
            irure minim illum fore</p>-->
        </div>
<style>
    .box{
        padding: 0px !important;
    }
    
</style>
        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">

                          <img src="assets/img/1.png" class="img-fluid" alt="" />

            <!--  <h4 class="title"><a href="">GASTRONOMY</a></h4>
        


              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                occaecati cupiditate non provident etiro rabeta lingo.</p>-->
            </div>
          </div>

          <!--<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="img"><i class="HVAC"></i></div>
              <img src="assets/img/HVAC.png" alt="image">
              <h4 class="title"><a href="">HVAC</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>-->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
             <img src="assets/img/2.png" class="img-fluid" alt="" />
            </div> 
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <img src="assets/img/3.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/4.png" class="img-fluid" alt="" />
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <img src="assets/img/5.png" class="img-fluid" alt="" />
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <img src="assets/img/6.png" class="img-fluid" alt="" />
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Clients</h2>
         <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
            export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
            irure minim illum fore</p>-->
        </div>

        <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
              <style>
                  #clients img {
                    max-width: 100%;
                    opacity: 2 !important;
                    padding: 15px 0;
                }
                  
              </style>
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Testimonials</h2>
          <!--<p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
            export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
            irure minim illum fore</p>-->
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Mechtex is a great consulting partner. They have shown consistency and high integrity over the course
                  of our relationship. We are very impressed with their commitment and outstanding quality.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>WABCO</h3>
                <!-- <h4>Ceo &amp; Founder</h4>-->
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Mechtex has been outstanding to work with, and has been instrumental in getting our requirements
                  fulfilled on time and within budget.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>ECOLAB</h3>
                <h4>ECOLAB</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  The Mechtex team helped build our complex and custom motor connector from scratch on-time and with
                  excellent quality. They were very knowledgeable in the domain and very professional. We are looking
                  forward to working with them on an ongoing basis
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>GABRIEL</h3>
                <h4>GABRIEL</h4>
              </div>
            </div><!-- End testimonial item -->




          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call Now</h3>
            <p class="cta-text"> Email us with any question and inquiries or call +917506994708. We would be happy to
              answer your question and set up a meeting with you. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Call Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Email us with any question and inquiries or call +917506994708. We would be happy to answer your question
            and set up a meeting with you.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>EL-108, Electronic Zone, MIDC Industrial Area, Mahape, Navi Mumbai, Maharashtra 400709</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+9175969944708</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">marketing5@com</a>
            </div>
          </div>

        </div>
      </div>
      <section id="clients">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Distributors</h2>
            <!--<p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>-->
          </div>

          <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="assets/img/clients/germany-1.png" class="img-fluid" alt="">
                 <h7 class="text-center"><b>Germany</b> <br>Powertronic Drive System GmbH.</h7>
              </div>
              <div class="swiper-slide"><img src="assets/img/clients/austria-2.png" class="img-fluid" alt="">
               <h7 class="text-center"><b>Austria</b> <br>Elra Antriebstechnik Vertriebs Ges m.b.H.</h7>
               <!--<h10 class ="text-center">Ingrams Time Systems Pyt Ltd.</h10>-->
              </div>
              <div class="swiper-slide"><img src="assets/img/clients/ITALY-3.png" class="img-fluid" alt=""> <h7 class="text-center"><b>ITALY</b> <br>Mechtex Italy SRL.</h7></div>
              <div class="swiper-slide"><img src="assets/img/clients/czech-4.png" class="img-fluid" alt=""> <h7 class="text-center"><b>Czech Republic</b> <br>Powergate 4 Motion s.r.o.</h7></div>
              <div class="swiper-slide"><img src="assets/img/clients/netherlads-5.png" class="img-fluid" alt=""> <h7 class="text-center"><b>Netherlands</b> <br> zilvertron</h7></div>
              <div class="swiper-slide"><img src="assets/img/clients/norway-6.png" class="img-fluid" alt=""> <h7 class="text-center"><b>Norway</b> <br>PowerMes</h7></div>
              <div class="swiper-slide"><img src="assets/img/clients/poland-7.png" class="img-fluid" alt=""> <h7 class="text-center"><b>Poland</b> <br>Powergate Sp.z.o.o.</h7></div>
              <div class="swiper-slide"><img src="assets/img/clients/turkey-8.png" class="img-fluid" alt=""> <h7 class="text-center"><b>Turkey</b> <br>Sanpal LTD. STI.</h7></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Clients Section -->


      <div class="container mb-4">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0147991554945!2d73.02575996646172!3d19.107006687077657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0ec55555555%3A0x6991c71c58e774b2!2sMechtex%20Motor%20and%20Gearbox%20Manufacturing%20Company!5e0!3m2!1sen!2sin!4v1615888100625!5m2!1sen!2sin" width="1124" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
      </div>

      <div class="container">
        <div class="form">
		<?php 
		   if(isset($_POST['submitcontact'])){
			   $contact_person=$_REQUEST['name'];
			   $email=$_REQUEST['email'];
			   $contact=$_REQUEST['phone'];
			   $application=$_REQUEST['message'];
			   
			   $data=mysqli_query($conn,"INSERT INTO communication (commtype, fname, email, phone,msg) VALUES ('inq', '".$contact_person."', '".$email."', '".$contact."','".$application."')");		
			     $message = "Form Name:-".$contact_person." || <br>To Email:- ".$email." || <br>To Contact:- ".$contact." ||<br> Message:- ".$_POST['message'];

			    $to_email = "dm@mechtex.com";
				$FromEmail='noreply@mechtex.com';
                $ReplyTo='noreply@mechtex.com';
                $FromName='MECHTEX Private Ltd.';
				$Subject='A query from MechTex';
                $Headers  = "MIME-Version: 1.0\n";
                $Headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $Headers .= "From: ".$FromName." <".$FromEmail.">\n";
                $Headers .= "Reply-To: ".$ReplyTo."\n";
                $Headers .= "X-Sender: <".$FromEmail.">\n";
                $Headers .= "X-Mailer: PHP\n";
                $Headers .= "X-Priority: 1\n";
                $Headers .= "Return-Path: <".$FromEmail.">\n";

			   if(mail($to_email, $Subject, $message, $Headers) == true) {
				//echo "Mail sent successfully";
				//header("location:../thank-you.html");
			   }
			   echo '<script type="text/javascript">alert("Thank you for contacting us.");window.location.href = "'.$_SERVER['PHP_SELF'].'";</script>';
		   }
		  
		  ?>
          <form action="#" method="post"  class="">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
            </div>

            <div class="text-center">
           
                        <button type="submit" class="btn btn-danger" id="btnclick" name="submitcontact" value="submit" style="background-color: #d10027 !important;">Submit</button>
                </div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php include "footer.php";?>
 
 <script>
  function loadstate(id,sel="")
		{
					$.ajax({
					type: "POST",
					url: "ajax.php?&cid="+id+"&req=state",
					data: $('#frmbook').serialize(),
					success: function(msg)
					{	
						$("#statedata").html(msg);
						
						
						
					}
		
					}); // Ajax Call
			
		}
		function loadcity(id,sel=""){
			$.ajax({
					type: "POST",
					url: "ajax.php?&sid="+id+"&req=city",
					data: $('#frmbook').serialize(),
					success: function(msg)
					{	
						$("#citydata").html(msg);
					}
				}); // Ajax Call
		}
  </script>
 