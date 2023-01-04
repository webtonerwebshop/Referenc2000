/*let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}*/


const slideshow = document.getElementById("slideshow");
const slides = slideshow.getElementsByClassName("slide");
const prevBtn = slideshow.getElementsByClassName("prev")[0];
const nextBtn = slideshow.getElementsByClassName("next")[0];

let currentSlide = 0;

function showSlide(n) {
  // remove the "active" class from all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }

  // update the current slide number
  currentSlide = (n + slides.length) % slides.length;

  // add the "active" class to the current slide
  slides[currentSlide].classList.add("active");



// show or hide the "prev" button depending on the current slide
if (currentSlide === 0) {
    prevBtn.style.display = "none";
  } else {
    prevBtn.style.display = "block";
  }
  
  // show or hide the "next" button depending on the current slide
  if (currentSlide === slides.length - 1) {
    nextBtn.style.display = "none";
  } else {
    nextBtn.style.display = "block";
  }
  }
  
  // show the first slide
  showSlide(0);
  
  // setup event listeners for the "prev" and "next" buttons
  prevBtn.addEventListener("click", function() {
    showSlide(currentSlide - 1);
  });
  nextBtn.addEventListener("click", function() {
    showSlide(currentSlide + 1);
  });




let slides = 1;