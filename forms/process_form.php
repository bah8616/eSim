<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    $_SESSION['pending_form_data'] = $_GET;
    header("Location: ../login.php");
    exit();
}

$package = isset($_GET['package']) ? $_GET['package'] : '';
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '';

// Process the form data
$_SESSION['cart'][] = array('package' => $package, 'quantity' => $quantity);    

// Redirect to the cart or payment page
header("Location: ../cart.php?package=" . urlencode($package) . "&quantity=" . urlencode($quantity));
exit();
?>
