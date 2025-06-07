<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login/");
    exit;
}

if (isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {
    header("Location: ../login/");
    exit;
}

include '../config.php';
$query = new Database();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Welcome admin</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-4/assets/css/login-4.css">
</head>

<body>
    <?php require('../src/navbar.php'); ?>

    <div class="flex">
        <?php require('../src/sidebar.php'); ?>
        <div style="margin-left: 280px;">
            <!-- <?php require('../src/landingPageSlider.php'); ?>
            <?php require('../src/teamMember.php'); ?> -->
             <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $file = "../src/$page.php";

            if (file_exists($file)) {
                include($file);
            } else {
                echo "<p>Page not found.</p>";
            }
        } else {
            echo "<h1>Welcome to Admin Panel</h1>";
        }
    ?>
        </div>
    </div>


</body>

</html>