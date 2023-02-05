/*let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  console.log(i)
  let slides = document.getElementsByClassName("feedback-slider-container");
  //let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1}   

  //for (i = 0; i < dots.length; i++) {
    //dots[i].className = dots[i].className.replace(" active", "");}
    slideIndex-=1;
  slides[slideIndex].style.display = "block";  
  slideIndex++;
  //dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}*/


















/*


var counter = 0;

function feedbackdiplay() {

    console.log("joo")
    
    var feedbackBox = document.querySelectorAll(".feedback-slider-container");

    console.log(feedbackBox[1])

    feedbackBox[counter].classList.add("visible");
    feedbackBox[counter-1].classList.remove("visible");
}

window.setTimeout(feedbackdiplay(), 3000);

*/


document.querySelectorAll(".feedback-slider-container")[1].classList.add("visible");












/*






function setDelay() {
    setTimeout(function() {
        console.warn("2")
    }, 1000);
}


while (true) {
    setDelay();
    console.log("futok")
    counter++;
    if (counter == 5) {
        counter = 0;
    }
}



/*
for (let i = 0; i < 10000; i++) {
    setTimeout(() => {
        feedbackdiplay();
        counter++;
        if (counter == 5) {
            counter = 0;
        }

    }, 3000);
}



}*/
