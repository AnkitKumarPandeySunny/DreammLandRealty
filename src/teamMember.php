  <?php

require_once 'db.php';
$stmt = $conn->prepare("SELECT * FROM supporting_partners");

$stmt->execute();
$result = $stmt->get_result();
$partnersList = $result->fetch_all(MYSQLI_ASSOC);
 if (!empty($partnersList)): ?>
  <!-- Team Start -->
  <div class="py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
              <h1 class="mb-3">Our Supporting Partners</h1>
              <p>
                  Together with our partners, we build lasting impact. <br>Their expertise and commitment empower us to
                  reach
                  new heights and deliver excellence at every step.
              </p>
          </div>
          <div class="owl-carousel partners-carousel wow fadeInUp" data-wow-delay="0.1s">
              <?php foreach ($partnersList as $index => $partner): ?>
              <div class="team-item rounded overflow-hidden">
                  <div class="position-relative" style="height:350px; width:100%;">
                      <img class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" src="img/supportingPartnersImg/<?= $partner['person_image'] ?>"
                          alt="" />
                      <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                          <a class="btn btn-square mx-1" href="<?= $partner['facebook_url'] ?>"><i
                                  class="fab fa-facebook-f"></i></a>

                          <a class="btn btn-square mx-1" href="<?= $partner['insta_url'] ?>"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4 mt-3">
                      <h5 class="fw-bold mb-0"><?= $partner['name'] ?></h5>
                      <small><?= $partner['position'] ?></small><br />
                      <small><?= $partner['mobile_no'] ?>
                      </small>
                  </div>
              </div>
              <?php endforeach; ?>
          </div>
      </div>
  </div>
  </div>
  <?php else: ?>
  <p>No carousel images found for "<?= htmlspecialchars($currentCategory) ?>"</p>
  <?php endif; ?>

  <!-- <div class="team-item rounded overflow-hidden">
                  <div class="position-relative" style="height:350px; width:100%;">
                      <img class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;"
                          src="img/ArpitaKarmakar.jpg" alt="" />
                      <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                          <a class="btn btn-square mx-1"
                              href="https://www.facebook.com/arpita.arpita.656617?mibextid=ZbWKwL"><i
                                  class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square mx-1"
                              href="https://www.instagram.com/realtor_arpita?igsh=MWpuYjkwajczYzZueA=="><i
                                  class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4 mt-3">
                      <h5 class="fw-bold mb-0">Arpita Karmakar</h5>
                      <small>Office In-charge</small><br />
                      <small>+91 9144144042
                      </small>
                  </div>

              </div> -->