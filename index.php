<?php
session_start();
if (isset($_SESSION['name'])) {
    include 'header-loggedin.php';
} else {
    include 'header.php';
}
?>

<body>

  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business and Travel</h1>
          <h2>We are team of talented devlopers</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#howwork" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

     <!-- ======= How it work Section ======= -->
     <section id="howwork" class="howwork">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>How it Works</h2>
          <p>Follow the steps below</p>
        </div>

        <div class="row justify-content-center">
  <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
    <div class="pic">
      <img src="assets/img/esim.png" height="400" width="820" alt="">
    </div>
  </div>
</div>


      </div>
    </section><!-- End how it works Section -->

  
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pricing</h2>
            <p>Check our affordable prices for your best data plan</p>
        </div>

        <div class="row">
            
            <div class="row my-5">
                <div class="col-12 text-center">
                    <h3 class="divider-title">Time Based Plans</h3>
                    <hr class="divider-line">
                    <p class="mt-3">Our time-based plans offer flexibility and convenience, ensuring you stay connected without worrying about data limits. Choose a plan that fits your schedule and enjoy uninterrupted service.</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                    <h3>Local</h3>
                    <h4><sup>€</sup>5<span>per week</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Free local calls</li>
                        <li><i class="bx bx-check"></i> Unlimited SMS</li>
                        <li class="na"><i class="bx bx-x"></i> <span>International Calls</span></li>
                        <li class="na"><i class="bx bx-x"></i> <span>Unlimited Roaming</span></li>
                    </ul>
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <form action="forms/process_form.php" method="get">
                            <input type="hidden" name="package" value="Time Based Plans - Local">
                            <select name="quantity" class="form-select" aria-label="Select quantity or days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br>
                            <button type="submit" class="buy-btn">Get Started</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3>Europe</h3>
                    <h4><sup>€</sup>29<span>per week</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Free Regional calls</li>
                        <li><i class="bx bx-check"></i> Unlimited SMS</li>
                        <li><i class="bx bx-check"></i> Unlimited Facetime</li>
                        <li><i class="bx bx-check"></i> Limited Roaming</li>
                    </ul>
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <form action="forms/process_form.php" method="get">
                            <input type="hidden" name="package" value="Time Based Plans - Europe">
                            <select name="quantity" class="form-select" aria-label="Select quantity or days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br>
                            <button type="submit" class="buy-btn">Get Started</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                    <h3>Global</h3>
                    <h4><sup>€</sup>49<span>per week</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Free Global calls</li>
                        <li><i class="bx bx-check"></i> Unlimited SMS</li>
                        <li><i class="bx bx-check"></i> Unlimited Facetime</li>
                        <li><i class="bx bx-check"></i> Unlimited Roaming</li>
                    </ul>
                     <div class="d-flex flex-column justify-content-between align-items-center">
                        <form action="forms/process_form.php" method="get">
                            <input type="hidden" name="package" value="Time Based Plans - Global">
                            <select name="quantity" class="form-select" aria-label="Select quantity or days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br>
                            <button type="submit" class="buy-btn">Get Started</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Divider with labels -->
            <div class="row my-5">
                <div class="col-12 text-center">
                    <h3 class="divider-title">Traffic Based Plans</h3>
                    <hr class="divider-line">
                    <p class="mt-3">Our traffic-based plans are perfect for users who need high data volumes. Whether you're streaming, gaming, or working remotely, we have a plan to keep you connected all year round.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="box d-flex flex-column">
                    <h3>Local</h3>
                    <h4><sup>€</sup>5 for 5GB<span>valid for 1 year</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Free local calls</li>
                        <li><i class="bx bx-check"></i> Unlimited SMS</li>
                        <li class="na"><i class="bx bx-x"></i> <span>International Calls</span></li>
                        <li class="na"><i class="bx bx-x"></i> <span>Unlimited Roaming</span></li>
                    </ul>
                     <div class="d-flex flex-column justify-content-between align-items-center">
                        <form action="forms/process_form.php" method="get">
                            <input type="hidden" name="package" value="Traffic Based Plans - Local">
                            <select name="quantity" class="form-select" aria-label="Select quantity or days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br>
                            <button type="submit" class="buy-btn">Get Started</button>
                        </form>
                    </div>
                 </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box d-flex flex-column featured">
                    <h3>Europe</h3>
                    <h4><sup>€</sup>10 for 5 GB<span>valid for 1 year</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Free Regional calls</li>
                        <li><i class="bx bx-check"></i> Unlimited SMS</li>
                        <li><i class="bx bx-check"></i> Unlimited Facetime</li>
                        <li><i class="bx bx-check"></i> Limited Roaming</li>
                    </ul>
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <form action="forms/process_form.php" method="get">
                            <input type="hidden" name="package" value="Traffic Based Plans - Europe">
                            <select name="quantity" class="form-select" aria-label="Select quantity or days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br>
                            <button type="submit" class="buy-btn">Get Started</button>
                        </form> 
                </div>
            </div>
          </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box d-flex flex-column">
                    <h3>Global</h3>
                    <h4><sup>€</sup>20 for 5GB<span>valid for 1 year</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Free Global calls</li>
                        <li><i class="bx bx-check"></i> Unlimited SMS</li>
                        <li><i class="bx bx-check"></i> Unlimited Facetime</li>
                        <li><i class="bx bx-check"></i> Unlimited Roaming</li>
                    </ul>
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <form action="forms/process_form.php" method="get">
                            <input type="hidden" name="package" value="Traffic Based Plans - Global">
                            <select name="quantity" class="form-select" aria-label="Select quantity or days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> <br>
                            <button type="submit" class="buy-btn">Get Started</button>
                        </form>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Pricing Section -->
     <!-- ======= Data Section ======= -->
    <!-- <section id="portfolio" class="portfolio">-->
    <!--  <div class="container" data-aos="fade-up">-->

    <!--    <div class="section-title">-->
    <!--      <h2>Data Plan</h2>-->
    <!--      <p>Choose from our amazing data plan for your internet</p>-->
    <!--    </div>-->

    <!--    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">-->
    <!--      <li data-filter="*" class="filter-active">All</li>-->
    <!--      <li data-filter=".filter-app">Local</li>-->
    <!--      <li data-filter=".filter-card">Continental</li>-->
    <!--      <li data-filter=".filter-web">Global</li>-->
    <!--    </ul>-->

    <!--    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">-->

    <!--      <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
    <!--        <div class="portfolio-img"><img src="assets/img/checkout/dataplan.jpeg" class="img-fluid" alt=""></div>-->
    <!--        <div class="portfolio-info">-->
    <!--          <h4>Web 3</h4>-->
    <!--          <p>Web</p>-->
    <!--          <a href="assets/img/portfolio/data plan.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>-->
    <!--          <a href="checkout.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">-->

    <!--      <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
    <!--        <div class="portfolio-img"><img src="assets/img/portfolio/dataplan.jpeg" class="img-fluid" alt=""></div>-->
    <!--        <div class="portfolio-info">-->
    <!--          <h4>Web 3</h4>-->
    <!--          <p>Web</p>-->
    <!--          <a href="assets/img/portfolio/data plan.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>-->
    <!--          <a href="checkout.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">-->

    <!--      <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
    <!--        <div class="portfolio-img"><img src="assets/img/portfolio/dataplan.jpeg" class="img-fluid" alt=""></div>-->
    <!--        <div class="portfolio-info">-->
    <!--          <h4>Web 3</h4>-->
    <!--          <p>Web</p>-->
    <!--          <a href="assets/img/portfolio/data plan.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>-->
    <!--          <a href="checkout.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
    <!--        </div>-->
    <!--      </div>-->

          

    <!--    </div>-->

    <!--  </div>-->
    <!--</section><!-- End Portfolio Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Through our ongoing research and development efforts, we strive to stay ahead of the curve and pioneer 
              the next generation of eSIM solutions.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Tackle even the most complex challenges in the eSIM industry.</li>
              <li><i class="ri-check-double-line"></i> Deliver innovative solutions that drive real-world impact.</li>
              <li><i class="ri-check-double-line"></i> Deliver results that exceed expectations and create lasting value for 
                our clients and partners.t</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Our team comprises passionate and skilled students from ELTE University's esteemed Computer Science program. 
              With a shared commitment to innovation and problem-solving, we pool our expertise to address the challenges and 
              opportunities presented by the eSIM market.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">

        <div class="content">
          <h3>Why Choose Us <strong>Because we excel</strong></h3>
          <p>We offer exceptional deals</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li>
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Wondering why we stand out? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  We provide top-notch solutions to meet your needs. Our services ensure satisfaction and reliability.
                </p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Looking for versatile solutions? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  We offer a wide range of services tailored to suit various requirements. Our solutions are efficient and effective.
                </p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Seeking reliable support? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Count on us for dependable assistance round the clock. We ensure prompt and professional support for all your queries.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/whyus.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
    </div>

  </div>
</section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> For business users, we offer customized eSIM solutions to enhance connectivity and streamline your operations. Contact us today to get started!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Boost your Business</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

   
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>We are the eSim World Development Team, specializing in the creation and enhancement of virtual SIM card technology. Our mission is to provide seamless, efficient, and secure connectivity solutions that empower users around the globe. With our cutting-edge innovations and commitment to excellence, we aim to redefine the future of mobile connectivity.</p>
        </div>

        <div class="row">

        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/yehao.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Zhou Yehao</h4>
                <span>Chief Executive Officer  </span>
                <p>"Leading innovation and driving success with strategic vision."</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/umaru1.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Umaru Bah</h4>
                <span>Product Manager</span>
                <p>"Transforming ideas into impactful eSIM solutions."</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

         

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/Arman.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mahmoudifar Arman</h4>
                <span>CTO</span>
                <p>"Engineering excellence and ensuring cutting-edge technology."</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Oubiche Houssameddine</h4>
                <span>Developer</span>
                <p>"Building seamless and efficient eSIM experiences."</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

   

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact us if you got any problem</p>
        </div>

        <div class="row">

<div class="col-lg-5 d-flex align-items-stretch">
    <div class="info">
        <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Info Park, Budapest, Hungary</p>
        </div>

        <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
        </div>

        <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13462.87345384016!2d19.0934954!3d47.4967457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476a6fb9aabb12d3%3A0x7d02c579c2202cb9!2sInfo%20Park%2C%20Budapest%2C%20Hungary!5e0!3m2!1sen!2suk!4v1623933191668" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
    </div>
</div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
              </body>

  <?php include 'footer.php'; ?>
