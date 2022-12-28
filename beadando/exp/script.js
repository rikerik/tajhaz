let mybutton = document.getElementById("myBtn");

window.onscroll = function () { scrollFunction() };


function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 20) {
    document.getElementById('myBtn').style.display='block';
  } else {
    document.getElementById('myBtn').style.display='none';
  }
}


function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
      
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);


