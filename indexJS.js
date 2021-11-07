window.onscroll = function() {scrollFunction()};

var nav = document.getElementClassName("nav");

var sticky = nav.offsetTop;

function scrollFunction() {
  if (window.pageYOffset >= sticky) {
    nav.classList.add("sticky")
  } else {
    nav.classList.remove("sticky");
  }
}
