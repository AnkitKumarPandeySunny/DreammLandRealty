(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();


  // Initiate the wowjs
  new WOW().init();


  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $('.nav-bar').addClass('sticky-top');
    } else {
      $('.nav-bar').removeClass('sticky-top');
    }
  });


  // // Back to top button
  // $(window).scroll(function () {
  //     if ($(this).scrollTop() > 300) {
  //         $('.back-to-top').fadeIn('slow');
  //     } else {
  //         $('.back-to-top').fadeOut('slow');
  //     }
  // });
  // $('.back-to-top').click(function () {
  //     $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
  //     return false;
  // });


  // Header carousel
  $(".header-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    items: 1,
    dots: true,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>'
    ]
  });


  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 24,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>'
    ],
    responsive: {
      0: {
        items: 1
      },
      992: {
        items: 2
      }
    }
  });

  $(".partners-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 14,
    dots: true,
    loop: true,
    nav: true, // Ensure navigation arrows are enabled
    navText: [
      '<i class="bi bi-arrow-left"></i>', // Custom left arrow icon
      '<i class="bi bi-arrow-right"></i>' // Custom right arrow icon
    ],
    responsive: {
      0: {
        items: 1, // 1 item for small screens
        nav: true // Enable navigation on small screens
      },
      576: {
        items: 2, // 2 items for slightly larger screens
        nav: true // Ensure arrows are still visible
      },
      768: {
        items: 3, // 3 items for medium screens
        nav: true
      },
      // 992: {
      //     items: 4, // 4 items for large screens
      //     nav: true
      // }
    }
  });




  document.addEventListener("DOMContentLoaded", function () {
    let contactModal = document.getElementById("contactModal");
    let modalTitle = contactModal.querySelector(".modal-title");
    let modalBody = contactModal.querySelector(".modal-body");
    let modalFooter = contactModal.querySelector(".modal-footer");

    let contactButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
    contactButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const propertyName = button.getAttribute("data-property-name");
        const propertyPrice = button.getAttribute("data-property-price");
        const propertyLocation = button.getAttribute("data-property-location");

        // <p><strong>Property Name:</strong> ${propertyName}</p>
        // <p><strong>Price:</strong> ${propertyPrice}</p>
        // <p><strong>Location:</strong> ${propertyLocation}</p>
        modalTitle.textContent = `Contact About: ${propertyName}`;
        modalBody.innerHTML = `

        <p>
          <b><input type="checkbox" id="contactAgreement" /> I agree to be contacted by Housing and agents via WhatsApp, SMS, phone, email etc.</b>
        </p>
        <p><input type="checkbox" id="interestedLoan" /> I am interested in Home Loans</p>
        <input type="email" id="userEmail" placeholder="Email" style="width:100%;" />
      `;

        modalFooter.innerHTML = `
        <button type="button" class="btn btn-primary w-100" id="getContactDetailButton">
          Get Contact Details
        </button>
      `;


        document.getElementById('getContactDetailButton').addEventListener('click', async () => {
          const email = document.getElementById('userEmail').value;
          const contactAgreement = document.getElementById('contactAgreement').checked;
          const interestedLoan = document.getElementById('interestedLoan').checked;

          if (!email) {
            alert("Please enter your email.");
            return;
          }

          const formData = {
            propertyName,
            propertyPrice,
            propertyLocation,
            email,
            contactAgreement,
            interestedLoan
          };

          const apiURL = 'https://backendforankit.onrender.com/sendEmailForDreamland';

          try {
            const response = await fetch(apiURL, {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              },
              body: JSON.stringify(formData)
            });

            if (response.ok) {
              alert("Details submitted successfully!");
            } else {
              alert("Something went wrong. Please try again.");
            }
          } catch (error) {
            console.error("Error:", error);
            alert("Network error. Please try again later.");
          }
        });
      });
    });
  });



  // GET Appoitmenet Detail 
  const getAppoitmentButton = document.getElementById("getAppoitmentButton");
  getAppoitmentButton.addEventListener('click', async () => {
    const getAppoitmentEmail = document.getElementById("getAppoitmentEmail").value;
    if (!getAppoitmentEmail) {
      alert('Please Enter mail.')
    }
    else {
      const apiURL = 'https://backendforankit.onrender.com/sendEmailForDreamland';

      try {
        const response = await fetch(apiURL, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ email: getAppoitmentEmail })
        });

        if (response.ok) {
          alert("Details submitted successfully!");
        } else {
          alert("Something went wrong. Please try again.");
        }
      } catch (error) {
        console.error("Error:", error);
        alert("Network error. Please try again later.");
      }
    }
  })

})(jQuery);

