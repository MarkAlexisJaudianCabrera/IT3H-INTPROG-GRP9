function navDropDownFunc() {
    document.getElementById("navDropDown").classList.toggle("show");
}
window.onclick = function(event) {
    if (!event.target.matches('.navDropDownBtn')) {
        var dropdowns = document.getElementsByClassName("navDropDown-list");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += "responsive";
    } else {
      x.className = "topnav";
    }
}

  function changeNavbarPosition(page) {
    const navbar = document.querySelector('.navbar');
    if (page === 'book-appointment') {
        navbar.style.position = 'relative';
    } else {
        navbar.style.position = 'static';
    }
}
