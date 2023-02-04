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