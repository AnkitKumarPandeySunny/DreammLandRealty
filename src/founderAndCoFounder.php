  <!-- Call to Action Section 1 (Founder & Director) -->
  <div id="section1" class=" py-5">
      <div class="container">
          <div class="bg-light rounded p-3">
              <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, 0.3)">
                  <div class="row g-5 align-items-center">
                      <!-- Text Section -->
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                          <div class="mb-4">
                              <h1 class="mb-3">Founder & Director</h1>
                              <p>"Built on vision, driven by action — crafting the future one bold move at a time."</p>
                          </div>
                          <a href="tel:7047944758" class="btn btn-primary py-3 px-4 me-2">
                              <i class="fa fa-phone-alt me-2"></i>Make A Call
                          </a>
                          <button class="btn btn-dark py-3 px-4" data-bs-toggle="modal"
                              data-bs-target="#getAppoitmentModal">
                              <i class="fa fa-calendar-alt me-2"></i>Get Appointment
                          </button>
                      </div>
                      <!-- Image Section -->
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                          <img class="img-fluid rounded w-100" src="img/founder.jpg" alt="" />
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Call to Action Section 2 (Co-Founder & Director) -->
  <div id="section2" class="py-5 d-none">
      <div class="container">
          <div class="bg-light rounded p-3">
              <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, 0.3)">
                  <div class="row g-5 align-items-center">
                      <!-- Image Section -->
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                          <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="" />
                      </div>
                      <!-- Text Section -->
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                          <div class="mb-4">
                              <h1 class="mb-3">Co-Founder & Director</h1>
                              <p>"Turning vision into value — leading with purpose, building with impact."</p>
                          </div>
                          <a href="tel:9304026942" class="btn btn-primary py-3 px-4 me-2">
                              <i class="fa fa-phone-alt me-2"></i>Make A Call
                          </a>
                          <button class="btn btn-dark py-3 px-4" data-bs-toggle="modal"
                              data-bs-target="#getAppoitmentModal">
                              <i class="fa fa-calendar-alt me-2"></i>Get Appointment
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- JavaScript to Auto Slide Every 6 Seconds -->
  <script>
let showFirst = true;
setInterval(() => {
    showFirst = !showFirst;
    document.getElementById("section1").classList.toggle("d-none", !showFirst);
    document.getElementById("section2").classList.toggle("d-none", showFirst);
}, 6000);
  </script>