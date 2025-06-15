<!-- Button trigger modal -->
<div class="d-flex justify-content-between mx-4 py-3">
    <h2>Our support Image</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#supportingPartnersId">
        Add New partner
    </button>
</div>

<?php
require_once 'db.php';




$result = $conn->query("SELECT * FROM supporting_partners");


echo "<table border='1' cellpadding='10' cellspacing='0' style='width:100%;'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image Path</th>
            <th>Mobile No.</th>
            <th>Position</th>
            <th>Facebook Url</th>
            <th>Insta Url</th>
            <th>Action</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['person_image'] . "</td>
            <td>" . $row['mobile_no'] . "</td>
            <td>" . $row['position'] . "</td>
            <td>" . $row['facebook_url'] . "</td>
            <td>" . $row['insta_url'] . "</td>
            <td><a href='?deleteSupportingPartner=" . $row['id'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>
          </tr>";
}

echo "</table>";
?>



<!-- Modal -->
<div class="modal fade" id="supportingPartnersId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Supporting Partner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../src/saveFormData/supportingPartnersUpload" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="partnerName" class="form-label">Name:</label>
                        <input class="form-control" id="partnerName" type="text" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="partnerPost" class="form-label">Post:</label>
                        <input class="form-control" id="partnerPost" type="text" name="post" required>
                    </div>
                    <div class="mb-3">
                        <label for="partnerMobile" class="form-label">Mobile No:</label>
                        <input class="form-control" id="partnerMobile" type="text" name="mobile_no" required>
                    </div>
                    <div class="mb-3">
                        <label for="partnerFacebook" class="form-label">Facebook URL:</label>
                        <input class="form-control" id="partnerFacebook" type="url" name="facebook_url" >
                    </div>
                    <div class="mb-3">
                        <label for="partneInsta" class="form-label">Instagram URL:</label>
                        <input class="form-control" id="partneInsta" type="url" name="insta_url" >
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Select Image:</label>
                        <input class="form-control" type="file" id="formFile" name="supportingPartnerImage" accept="image/*"
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