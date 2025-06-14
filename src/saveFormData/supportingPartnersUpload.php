<?php
// Database config
require_once '../db.php';


// Form Submission Check
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $name = $_POST['name'];
    $post = $_POST['post']; 
    $mobile_no = $_POST['mobile_no'];
    $facebook_url = $_POST['facebook_url'] ?? '';
    $insta_url = $_POST['insta_url'] ?? '';



    // File upload
    $target_dir = "../../img/supportingPartnersImg/";
    $image_name = basename($_FILES["supportingPartnerImage"]["name"]);
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate image
    $check = getimagesize($_FILES["supportingPartnerImage"]["tmp_name"]);
    if ($check === false) {
        die("Uploaded file is not an image.");
    }

    // Move uploaded file
    if (move_uploaded_file($_FILES["supportingPartnerImage"]["tmp_name"], $target_file)) {
        // Save to database
        $stmt = $conn->prepare("INSERT INTO supporting_partners (name, position, mobile_no, facebook_url, insta_url, person_image) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $post, $mobile_no, $facebook_url, $insta_url, $image_name);

        if ($stmt->execute()) {?>
<script>
window.addEventListener("DOMContentLoaded", function() {
    alert("Supporting Partner created successfully!");
    window.location.href = '/DreammLandRealty/admin/index.php?page=teamMemberAdmin';
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
}

$conn->close();
?>


?>