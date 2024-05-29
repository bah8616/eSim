<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name']; // Fetch the name from the database

            // Check if there is pending form data
            if (isset($_SESSION['pending_form_data'])) {
                $form_data = $_SESSION['pending_form_data'];
                unset($_SESSION['pending_form_data']);

                // Redirect to the process_form.php with the stored form data
                $query = http_build_query($form_data);
                header("Location: process_form.php?$query");
                exit();
            }

            // Redirect to dashboard or another appropriate page if no pending form data
            header("Location: ../Dashboard.php");
            exit();
        } else {
            header("Location: ../login.php");
            exit();
        }
    } else {
        header("Location: ../login.php");
        exit();
    }
}
?>