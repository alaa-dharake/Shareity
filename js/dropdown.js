document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown1');
  
    dropdowns.forEach(function(dropdown) {
        const toggle = dropdown.querySelector('.toggle');
  
        toggle.addEventListener('click', function() {
            dropdown.classList.toggle('open');
        });
    });
  
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        dropdowns.forEach(function(dropdown) {
            if (!dropdown.contains(event.target)) {
                dropdown.classList.remove('open');
            }
        });
    });
  
    // Initially close the dropdown
    dropdowns.forEach(function(dropdown) {
        dropdown.classList.remove('open');
    });
  })