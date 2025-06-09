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

// include '../config.php';
// $query = new Database();
require_once '../src/db.php';





// Must be before any HTML
if (isset($_GET['deleteCarouselImage'])) {
    $id = intval($_GET['deleteCarouselImage']);
    
    // Optional: check if record exists before delete
    $check = $conn->query("SELECT * FROM carousel_image WHERE id = $id");
    
    
    if ($check->num_rows > 0) {
        $data = $check->fetch_assoc();
        $relativeImagePath = $data['image_url']; 
        $fullImagePath = "../img/uploadedImg/" . $relativeImagePath;

        // Delete the file if it exists
        if (file_exists($fullImagePath)) {
            unlink($fullImagePath);
        }
        else {
            echo "<pre>File not found: $fullImagePath</pre>";
        }
        $conn->query("DELETE FROM carousel_image WHERE id = $id");
        ?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("Image Deleted successfully!");
    window.location.href = '/DreammLandRealty/admin/index.php?page=landingPageSlider';
});
</script>
<?php
$conn->close();
        exit;
    }
    else{
        ?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("Invalid image ID !");
    window.location.href = '/DreammLandRealty/admin/index.php?page=landingPageSlider';
});
</script>
<?php
    }
}
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
    <script src="../js/sweetalert2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>