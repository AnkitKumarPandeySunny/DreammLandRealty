<?php
$currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$currentCategory = trim(basename($currentRoute), '/'); // e.g., "home", "about"
require_once 'db.php';
$pageType = "home";
$stmt = $conn->prepare("SELECT * FROM carousel_image WHERE page_type = 'home'");

$stmt->execute();
$result = $stmt->get_result();
$images = $result->fetch_all(MYSQLI_ASSOC);
 if (!empty($images)): ?>
<div id="carouselExampleControls" class="carousel slide heroSectionContainer" data-ride="carousel"
    style="height:600px;margin:auto;">
    <div class="carousel-inner m-0">
        <?php foreach ($images as $index => $img): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>" style="height:600px;">
            <img class="d-block w-100 h-100 object-fit-cover"
                src="./img/uploadedImg/<?= htmlspecialchars($img['image_url']) ?>" alt="<?= $img['attribute'] ?>">
        </div>
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php else: ?>
<p>No carousel images found for "<?= htmlspecialchars($currentCategory) ?>"</p>
<?php endif; ?>




