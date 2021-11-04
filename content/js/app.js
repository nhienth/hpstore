//Get the button:
mybutton = document.getElementById("myBtn");
mynavigation = document.querySelector(".main-navagation");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.opacity = "1";
    mybutton.style.visibility = "visible";
    mybutton.style.transition = "all 0.2s ease";
    mynavigation.style.position = "fixed";
    mynavigation.style.top = "0";
    mynavigation.style.left = "0";
    mynavigation.style.zIndex = "99";
  } else {
    mybutton.style.opacity = "0";
    mybutton.style.visibility = "hidden";
    mybutton.style.transition = "all 0.2s ease";
    mynavigation.style.position = "relative";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
