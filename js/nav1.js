$(document).ready(function () {
    const images = [
        "assets/images/homepage/hero-biryani.png",
        "assets/images/homepage/hero-burger.png",
        "assets/images/homepage/hero-pizza.png"
    ];
    let index = 0;

    setInterval(() => {
        const image1 = document.getElementById('image1');
        const image2 = document.getElementById('image2');
        const image3 = document.getElementById('image3');

        if (image1 && image2 && image3) {
            index = (index + 1) % images.length;
            image1.src = images[index % images.length];
            image2.src = images[(index + 1) % images.length];
            image3.src = images[(index + 2) % images.length];
        } else {
            console.error('One or more image elements not found.');
        }
    }, 2000); // Change image every 2 seconds

    // Click event for navigation links
    $('#navbar a').click(function () {
        $('#navbar a').removeClass('active');
        $(this).addClass('active');
    });

    // Function to add 'active' class to navigation links based on scroll position
    function navbarlinksActive() {
        const navbarlinks = document.querySelectorAll('#navbar a');

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
        $('#navbar').addClass('blurred-bg'); // Add the 'blurred-bg' class to the navbar if not on the home page
    }
});
