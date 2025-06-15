<!-- Button trigger modal -->
<div class="d-flex justify-content-between mx-4 py-3">
    <h2>Landing Page Slider Image</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLandingPageSliderImage">
        Add New Image
    </button>
</div>

<?php
require_once 'db.php';




$result = $conn->query("SELECT * FROM carousel_image");


echo "<table border='1' cellpadding='10' cellspacing='0' style='width:100%;'>
        <tr>
            <th>ID</th>
            <th>Attribute</th>
            <th>Page</th>
            <th>Image Path</th>
            <th>Action</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['attribute'] . "</td>
            <td>" . $row['page_type'] . "</td>
            <td>" . $row['image_url'] . "</td>
            <td><a href='?deleteCarouselImage=" . $row['id'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>
          </tr>";
}

echo "</table>";
?>



<!-- Modal -->
<div class="modal fade" id="addLandingPageSliderImage" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add LandingPage Slider Image</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../src/saveFormData/carouselSliderUpload" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formAttribute" class="form-label">Attribute:</label>
                        <input class="form-control" id="formAttribute" type="text" name="formAttribute" required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="pageType" class="form-label">Page:</label>
                        <select class="form-select form-select-md mb-3" id="pageType" name="pageType"
                            aria-label="Large select example">
                            <option selected  value="home">Home</option>
                            <option value="asansol">Asansol</option>
                            <option value="burnpur">Burnpur</option>
                            <option value="andal">Andal</option>
                            <option value="durgapur">Durgapur</option>
                            <option value="bolpur">Bolpur</option>
                            <option value="bankura">Bankura</option>
                            <option value="raniganj">Raniganj</option>
                            <option value="nh2">NH2</option>
                        </select>
                    </div> -->


                    <div class="mb-3">
                        <label for="formFile" class="form-label">Select Image:</label>
                        <input class="form-control" type="file" id="formFile" name="carouselImage" accept="image/*"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit" value="Upload">Add Image</button>
                </div>
            </form>
        </div>
    </div>
</div>