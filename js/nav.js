$(document).ready(function () {
    const images = ["assets/images/meals/Untitled_design__16_-removebg-preview.png", "assets/images/meals/Untitled_design__21_-removebg-preview.png", "assets/images/meals/Untitled_design__15_-removebg-preview.png"];
    let index = 0;

    setInterval(() => {
        const image1 = document.getElementById('image1');
        const image2 = document.getElementById('image2');
        const image3 = document.getElementById('image3');

        index = (index + 1) % images.length;
        image1.src = images[index % images.length];
        image2.src = images[(index + 1) % images.length];
        image3.src = images[(index + 2) % images.length];
    }, 2000); // Change image every 2 seconds

    // Click event for navigation links
    $('#nav-bar a').click(function () {
        $('#nav-bar a').removeClass('active');
        $(this).addClass('active');
    });

    // Function to add 'active' class to navigation links based on scroll position
    function navbarlinksActive() {
        const navbarlinks = document.querySelectorAll('#nav-bar a');

        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return;

            let section = document.querySelector(navbarlink.hash);
            if (!section) return;

            let position = window.scrollY + 200;

            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active');
            } else {
                navbarlink.classList.remove('active');
            }
        });
    }

    // Event listener for scroll event to activate navigation links
    window.addEventListener('scroll', navbarlinksActive);
    navbarlinksActive();

    // Add 'blurred-bg' class to navbar if not on the home page
    const currentPage = window.location.pathname.split('/').pop(); // Get the current page filename
    if (currentPage !== 'index.html') {
        $('#nav-bar').addClass('blurred-bg'); // Add the 'blurred-bg' class to the navbar if not on the home page
    }
});

function closeOpenDropdowns(e) {
    let openDropdownEls = document.querySelectorAll("details.dropdown[open]");

    if (openDropdownEls.length > 0) {
        // If we're clicking anywhere but the summary element, close dropdowns
        if (e.target.parentElement.nodeName.toUpperCase() !== "SUMMARY") {
            openDropdownEls.forEach((dropdown) => {
                dropdown.removeAttribute("open");
            });
        }
    }
}

document.addEventListener("click", closeOpenDropdowns);

(function ($) {
    "use strict";

    jQuery(document).ready(function () {

        /* --------------------------------------------------------
            1. Variables
        --------------------------------------------------------- */
        var $window = $(window),
            $body = $('body');

        /* --------------------------------------------------------
            2. Mobile Menu
        --------------------------------------------------------- */
        /* ---------------------------------
           Utilize Function 
       ----------------------------------- */
        (function () {
            var $ltn__utilizeToggle = $('.ltn__utilize-toggle'),
                $ltn__utilize = $('.ltn__utilize'),
                $ltn__utilizeOverlay = $('.ltn__utilize-overlay'),
                $mobileMenuToggle = $('.mobile-menu-toggle');
            $ltn__utilizeToggle.on('click', function (e) {
                e.preventDefault();
                var $this = $(this),
                    $target = $this.attr('href');
                $body.addClass('ltn__utilize-open');
                $($target).addClass('ltn__utilize-open');
                $ltn__utilizeOverlay.fadeIn();
                if ($this.parent().hasClass('mobile-menu-toggle')) {
                    $this.addClass('close');
                }
            });
            $('.ltn__utilize-close, .ltn__utilize-overlay').on('click', function (e) {
                e.preventDefault();
                $body.removeClass('ltn__utilize-open');
                $ltn__utilize.removeClass('ltn__utilize-open');
                $ltn__utilizeOverlay.fadeOut();
                $mobileMenuToggle.find('a').removeClass('close');
            });
        })();
    });
})(jQuery);