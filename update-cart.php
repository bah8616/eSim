<?php

if (isset($_POST['package']) && isset($_POST['quantity'])) {
    $package = $_POST['package'];
    $quantity = intval($_POST['quantity']);

    $prices = [
        'Time Based Plans - Local' => 5,
        'Time Based Plans - Europe' => 29,
        'Time Based Plans - Global' => 49,
        'Traffic Based Plans - Local' => 5,
        'Traffic Based Plans - Europe' => 10,
        'Traffic Based Plans - Global' => 20
    ];

    if (array_key_exists($package, $prices)) {
        header('Location: cart.php?package=' . urlencode($package) . '&quantity=' . $quantity . '&updated=1');
        exit;
    } else {

        header('Location: cart.php?error=package_not_found');
        exit;
    }
} else {
    header('Location: cart.php?error=missing_params');
    exit;
}
?>