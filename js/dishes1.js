
// Get all the dropdown2 from document
document.querySelectorAll('.dropdown2-toggle').forEach(dropDownFunc);

// Dropdown2 Open and Close function
function dropDownFunc(dropDown) {
    console.log(dropDown.classList.contains('click-dropdown2'));

    if(dropDown.classList.contains('click-dropdown2') === true){
        dropDown.addEventListener('click', function (e) {
            e.preventDefault();        
    
            if (this.nextElementSibling.classList.contains('dropdown2-active') === true) {
                // Close the clicked dropdown2
                this.parentElement.classList.remove('dropdown2-open');
                this.nextElementSibling.classList.remove('dropdown2-active');
    
            } else {
                // Close the opend dropdown2
                closeDropdown();
    
                // add the open and active class(Opening the DropDown2)
                this.parentElement.classList.add('dropdown2-open');
                this.nextElementSibling.classList.add('dropdown2-active');
            }
        });
    }

    if(dropDown.classList.contains('hover-dropdown2') === true){

        dropDown.onmouseover  =  dropDown.onmouseout = dropdownHover;

        function dropdownHover(e){
            if(e.type == 'mouseover'){
                // Close the opend dropdown2
                closeDropdown();

                // add the open and active class(Opening the DropDown2)
                this.parentElement.classList.add('dropdown2-open');
                this.nextElementSibling.classList.add('dropdown2-active');
                
            }

            // if(e.type == 'mouseout'){
            //     // close the dropdown2 after user leave the list
            //     e.target.nextElementSibling.onmouseleave = closeDropdown2;
            // }
        }
    }

};


// Listen to the doc click
window.addEventListener('click', function (e) {

    // Close the menu if click happen outside menu
    if (e.target.closest('.dropdown2-container') === null) {
        // Close the opend dropdown2
        closeDropdown();
    }

});


// Close the openend Dropdown2s
function closeDropdown() { 
    console.log('run');
    
    // remove the open and active class from other opened Dropdown2 (Closing the opend DropDown2)
    document.querySelectorAll('.dropdown2-container').forEach(function (container) { 
        container.classList.remove('dropdown2-open')
    });

    document.querySelectorAll('.dropdown2-menu').forEach(function (menu) { 
        menu.classList.remove('dropdown2-active');
    });
}

// close the dropdown2 on mouse out from the dropdown2 list
document.querySelectorAll('.dropdown2-menu').forEach(function (dropDownList) { 
    // close the dropdown2 after user leave the list
    dropDownList.onmouseleave = closeDropdown;
});


