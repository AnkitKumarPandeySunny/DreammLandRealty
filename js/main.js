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
        nav : true,
        navText : [
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
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
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
    
    
    

    document.addEventListener('DOMContentLoaded', function () {
        // Get the modal element and its title, body parts
        var contactModal = document.getElementById('contactModal');
        var modalTitle = contactModal.querySelector('.modal-title');
        var modalBody = contactModal.querySelector('.modal-body p');
    
        // Attach an event listener to all contact buttons
        var contactButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
        contactButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Get the property data from the button's data attributes
                var propertyName = button.getAttribute('data-property-name');
                var propertyPrice = button.getAttribute('data-property-price');
                var propertyLocation = button.getAttribute('data-property-location');
    
                // Update the modal content with the dynamic data
                modalTitle.textContent = `Contact About: ${propertyName}`;
                modalBody.innerHTML = `
                    <p><strong>Property Name:</strong> ${propertyName}</p>
                    <p><strong>Price:</strong> ${propertyPrice}</p>
                    <p><strong>Location:</strong> ${propertyLocation}</p>
                    <p> <b><input type="checkbox"/> I agree to be contacted by Housing and agents via WhatsApp, SMS, phone, email etc.</b></p>
                    <p><input type="checkbox"/> I am interested in Home Loans</p>
                `;
            });
        });
    });
    
})(jQuery);

