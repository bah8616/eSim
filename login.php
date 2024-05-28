<?php include 'header.php'; ?>

   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Yehao esim</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#Data Plan">Data Plan</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="signup.php">Contact</a></li>
          <li><a class="getstarted scrollto" href="login.php">Account</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Account</li>
        </ol>
        <h2> login </h2>

      </div>
    </section><!-- End Breadcrumbs -->

 <!-- ======= Account Section ======= -->
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Account</h2>
          <p>Create your account now with us for free.</p>
        </div>


<div class="row justify-content-center">

    <!-- Login Form -->
    <div class="col-lg-6 d-flex align-items-stretch">
        <form action="forms/login.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <h4>Login</h4>
                <div class="form-group col-md-12">
                    <label for="email">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                
            </div>
            <div class="text-center"><button type="submit">Sign in</button></div>
        </form>
    </div>

</div>

      </div>
    </section><!-- End Signup & Login Section -->


<?php include 'footer.php'; ?>