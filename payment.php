<?php include 'header.php'; ?>

   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">eSim World</a></h1>
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
          <li><a class="nav-link scrollto" href="signup.php">Sign Up</a></li>
          <li><a class="getstarted scrollto" href="login.php">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.php">Home</a></li>
            <li>Payment</li>
        </ol>
        <h2>Payment</h2>

    </div>
</section><!-- End Breadcrumbs -->

<?php
    if (isset($_GET['quantity'])) {
        $quantity = intval($_GET['quantity']);
    } else {
        $quantity = 1;
    }

    $package = $_GET['package'];

    $prices = [
        'Time Based Plans - Local' => 5,
        'Time Based Plans - Europe' => 29,
        'Time Based Plans - Global' => 49,
        'Traffic Based Plans - Local' => 5,
        'Traffic Based Plans - Europe' => 10,
        'Traffic Based Plans - Global' => 20
    ];


    $total_price = $prices[$package] * $quantity;
?>

<main id="main">

    <!-- ======= Payment Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Payment</h2>
                <p>Please check your eSims and fill in the payment details below.</p>
            </div>

            <div class="row justify-content-center">
                
                <!-- Payment Details -->
                <div class="payment-details text-center">
                    <p>Package: <?php echo ucfirst($package); ?></p>
                    <p>Quantity: <?php echo $quantity; ?></p>
                    <p>Total Price: €<?php echo $total_price; ?></p>
                </div>

                <!-- Payment Form -->
                <div class="col-lg-6 d-flex align-items-stretch">
                    <form action="checkout.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <label for="name">Name on Card</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="card-number">Card Number</label>
                            <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Card Number" required>
                        </div>
                        <div class="form-group">
                            <label for="expiry-date">Expiry Date</label>
                            <input type="text" class="form-control" name="expiry-date" id="expiry-date" placeholder="MM/YY" required>
                        </div>
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" name="cvc" id="cvc" placeholder="CVC" required>
                        </div>
                        <div class="text-center">
                            <button type="submit">Submit Payment</button>
                        </div>
                        <!-- Hidden fields to pass package and quantity to process_payment.php -->
                        <input type="hidden" name="package" value="<?php echo htmlspecialchars($package); ?>">
                        <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                        <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Payment Section -->

    <?php include 'footer.php'; ?>

</main><!-- End #main -->
</body>
</html>