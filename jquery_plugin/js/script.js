

// sticky navbar
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// expanding burger

const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('main-nav')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

// smooth scroll header

const links = document.querySelectorAll(".main-header ul a, .section1 a");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;

  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}

// NICE scroll
// =======================

$("body").niceScroll({
  cursorcolor:"gray",
  cursorwidth:"6px"
});







