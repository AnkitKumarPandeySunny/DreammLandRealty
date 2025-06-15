<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dreamm Land Realty | Real-State</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap Dialog box -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    /> -->


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/stylepupop.css" rel="stylesheet" />
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <?php include('./src/navbar.php')?>
        <!-- Navbar End -->

        <div class="bg-white heroSectionContainerMain p-0">
            <?php include('./src/sliderImage.php')?>

            <main class="heroSectionContainer">
                <div class="heroSectionWrapper position-absolute">
                    <h3 class="heroSectionTitle pl-4">Properties to buy in West-Bengal</h3>
                    <div class="heroSectionsearchWrapper py-4">
                        <div class="heroSectionsearchType">
                            <p>PLOTS</p>
                            <p><a href="#listedAppartmentsId" class="text-white">APARTMENTS</a></p>
                            <p><a href="#listedCommercialId" class="text-white">COMMERCIAL</a></p>
                        </div>
                        <div class="heroSectionsearch">
                            <select class="heroSectionsearch-select" id="locationSelect" onchange="redirectToPage()">
                                <option value="default" selected>Select Location Here</option>
                                <option value="asansol">Asansol</option>
                                <option value="burnpur">Burnpur</option>
                                <option value="andal">Andal</option>
                                <option value="durgapur">Durgapur</option>
                                <option value="bolpur">Bolpur</option>
                                <option value="bankura">Bankura</option>
                                <option value="raniganj">Raniganj</option>
                                <option value="nh2">NH2</option>
                            </select>
                        </div>

                        <script>
                        window.onload = function() {
                            a
                            document.getElementById("locationSelect").value = "default";
                        };

                        function redirectToPage() {
                            const selectElement = document.getElementById("locationSelect");
                            const selectedValue = selectElement.value;
                            if (selectedValue != 'default') {
                                window.location.href = selectedValue + ".html";
                            }
                        }
                        </script>

                    </div>
                </div>
            </main>
        </div>

    </div>
    <!-- Running line like marquee -->
    <div class="running-line m-auto">
        <p>
            <b>Corporate-Office:-</b> Karunamoyee Housing Estate, Roy House,
            Near Ragunath niwas, Beside HLG Hospital, Asansol, WB-713305.
        </p>
    </div>

    <!-- Category Start -->
    <div class="py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h1 class="mb-3">Our Ongoing Projects</h1>
                <p>
                    At Dreamm Land Realty, each of our projects is carefully curated
                    to enhance the quality of life deliver unmatched value, and set a
                    new standard in the real estate industry. We invite you to explore
                    these unique opportunities and become part of the Dreamm Land
                    Realty family
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-apartment.png" alt="Icon" />
                            </div>
                            <h6>Residential plots</h6>
                            <span>45 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-villa.png" alt="Icon" />
                            </div>
                            <h6>Commercial plots</h6>
                            <span>82 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-house.png" alt="Icon" />
                            </div>
                            <h6>Commercial Rent</h6>
                            <span>28 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-housing.png" alt="Icon" />
                            </div>
                            <h6>Aparments</h6>
                            <span>65 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-building.png" alt="Icon" />
                            </div>
                            <h6>Industrials</h6>
                            <span>52 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon" />
                            </div>
                            <h6>Bigha</h6>
                            <span>77 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-condominium.png" alt="Icon" />
                            </div>
                            <h6>Bungalows</h6>
                            <span>92 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-luxury.png" alt="Icon" />
                            </div>
                            <h6>Auction Property</h6>
                            <span>123 Properties</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->

    <!-- About Start -->
    <div class=" py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about5.jpg" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                    <p class="mb-4">
                        “We don’t just find properties — we discover possibilities.<br>
                        Where comfort meets class, and every corner feels like home.<br>
                        Your perfect space is just a step away.”
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Best Residential Properties
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Best Commercial Spaces</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Best Investment Opportunities</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Property List Start -->
    <?php include('./src/listedPropertySec.php')?>
    <!-- Property List End -->
    <!-- Call to Action Start 2-->
    <?php include('./src/founderAndCofounder.php')?>
    <!-- Call to Action End -->

    <!-- Team Start -->
    <?php include('./src/teamMember.php')?>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h1 class="mb-3">Our Clients Say!</h1>
                <p>
                    "We couldn’t be happier with the results! Professional, <br>reliable, and truly dedicated — they
                    went above
                    and beyond to deliver excellence. Highly recommended!"
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>
                            "Absolutely thrilled with the service! Everything was handled with care and precision. We’re
                            100%
                            satisfied and wouldn’t hesitate to work with them again!"
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-11.jpg"
                                style="width: 45px; height: 45px" />
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Abhishek Sharma</h6>
                                <small>Business Owner</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>
                            "The team provided exceptional service! We saw remarkable improvements in our business after
                            their
                            support. We will definitely continue to partner with them in the future!"
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-21.jpg"
                                style="width: 45px; height: 45px" />
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Neha Gupta</h6>
                                <small>Marketing Manager</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>
                            "Truly impressed with the level of professionalism and dedication shown. Their work exceeded
                            our
                            expectations, and we look forward to working with them again!"
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-31.jpg"
                                style="width: 45px; height: 45px" />
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ravi Kumar</h6>
                                <small>Entrepreneur</small>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php include('./src/footer.php')?>
    <!-- Footer End -->

    <!-- Whatsapp Icon -->
    <a class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Chat on WhatsApp"
        href="https://wa.me/7047944758" target="_blank"><i class="bi bi-whatsapp"></i></a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your contact form or message here -->
                    <p>
                        <input type="checkbox" /><input />I agree to be contacted by
                        Housing and agents via WhatsApp, SMS, phone, email etc.
                    </p>
                </div>
                <div class="modal-footer py-0">
                    <button type="button" class="btn btn-primary w-100">
                        Get Contact Details
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ###### Get Appoitment Model ####### -->
    <div class="modal fade" id="getAppoitmentModal" tabindex="-1" aria-labelledby="contactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">
                        <i class="fa fa-calendar-alt me-2"></i>Get Appoinment
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Get Appoinment Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Voluptas nemo rerum nesciunt nobis reprehenderit facilis
                        eius perspiciatis. Minima, iure nobis..
                    </p>
                    <p class="text-center">Or</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            <i class="fa fa-calendar-alt me-2"></i>Schedule
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- pupop code  -->
    <div id="popup" class="popup hidden">
        <div class="popup-content">
            <span id="close-btn" class="close-btn">&times;</span>
            <h2>Enquiry Now</h2>
            <form id="enquiry-form">
                <input type="text" name="name" placeholder="Your Name" required />
                <input type="tel" name="contact" placeholder="Contact Number" required />
                <input type="text" name="location" placeholder="Your Location" required />
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" id="enquiry-submit-btn">
                    <span id="enquiry-btn-text">Submit</span>
                    <span id="enquiry-btn-spinner" class="spinner-border spinner-border-sm d-none" role="status"
                        aria-hidden="true"></span>
                </button>
            </form>
        </div>
    </div>

    <script src="popup.js"></script>
    <!-- ###### Get Appoitment Model ####### -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>