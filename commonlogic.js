//Menu and submenus hide function

var openorclosed = 0;

function navdisplay() {
    openorclosed+=1;
    if (openorclosed % 2 == 1) {
        document.getElementById("navbar").style.display = "block";
    }
    else {
        document.getElementById("navbar").style.display = "none";
    }
}


var openorclosed_rooms = 0;

function navdisplay_rooms() {
    openorclosed_rooms+=1;
    if (openorclosed_rooms % 2 == 1) {
        document.getElementById("rooms").style.display = "block";
    }
    else {
        document.getElementById("rooms").style.display = "none";
    }
}



var openorclosed_services = 0;

function navdisplay_services() {
    openorclosed_services+=1;
    if (openorclosed_services % 2 == 1) {
        document.getElementById("services").style.display = "block";
    }
    else {
        document.getElementById("services").style.display = "none";
    }
}



//Upicon displayment

window.addEventListener("scroll", upicondisplay);


function upicondisplay () {
    if (window.scrollY > 150) {
        document.getElementById("upicon").style.opacity = 1;
    }
    else {
        document.getElementById("upicon").style.opacity = 0;
    }
}



//Reveal items


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