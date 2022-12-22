var openorclosed = 0;

function navdisplay() {
    openorclosed+=1;
    if (openorclosed % 2 == 1) {
        document.getElementById("mobile_navbar").style.opacity = 1;
    }
    else {
        document.getElementById("mobile_navbar").style.opacity = 0;
    }
}


window.addEventListener("scroll", reveal);

function reveal () {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++){

        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 50;

        if (revealTop <windowHeight - revealPoint){
            reveals[i].classList.add("active");
        }
        /*else {
            reveals[i].classList.remove("active");

        }*/
    }
}



window.addEventListener("scroll", upicondisplay);




function upicondisplay () {
    if (window.scrollY > 150) {
        document.getElementById("upicon").style.opacity = 1;
    }
    else {
        document.getElementById("upicon").style.opacity = 0;
    }
}