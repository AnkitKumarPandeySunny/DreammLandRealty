<?php
// Database config
require_once '../db.php';

// Get and sanitize form inputs
$name     = $conn->real_escape_string($_POST['formAttribute']);
// $category = $conn->real_escape_string($_POST['pageType']);
$category = 'home';

// Set base upload path
$baseUploadDir = "../../img/uploadedImg/";

// Create category folder if not exists
$categoryDir = $baseUploadDir . $category . "/";
if (!is_dir($categoryDir)) {
    mkdir($categoryDir, 0777, true); // recursive mkdir
}

// Validate uploaded file is an image
$allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
$allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

$fileTmpPath = $_FILES["carouselImage"]["tmp_name"];
$fileName = basename($_FILES["carouselImage"]["name"]);
$fileMime = mime_content_type($fileTmpPath);
$fileExt  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

// Check MIME type and extension
if (in_array($fileMime, $allowedMimeTypes) && in_array($fileExt, $allowedExtensions)) {
    
    $uniqueFileName = time() . "_" . $fileName;
    $targetPath = $categoryDir . $uniqueFileName;

    if (move_uploaded_file($fileTmpPath, $targetPath)) {
        // Save relative path to DB
        $relativePath = $category . "/" . $uniqueFileName;

        $stmt = $conn->prepare("INSERT INTO carousel_image (attribute, page_type, image_url) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $category, $relativePath);

        if ($stmt->execute()) {?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("Form submitted and image uploaded successfully!");
    window.location.href = '/DreammLandRealty/admin/index.php?page=landingPageSlider';
});
</script>
<?php
} else {?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("Database error: ".$stmt - > error);
});
</script>
<?php
}
$stmt->close();
} else {
    ?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("File upload failed.");
});
</script>
<?php
}

} else {
    ?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("Invalid file type. Only JPG, PNG, GIF, and WEBP images are allowed.");
});
</script>
<?php
}


$conn->close();
?>