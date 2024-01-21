
function open_appointment(){
    // document.getElementById("right").style.opacity = "0.2";
    // document.getElementById("navbar").style.opacity = "0.2";
    document.getElementById("new-appointment").style.opacity = "1";
    document.getElementById("new-appointment").style.transform = "scale(100% , 100%)";
}

function close_appointment(){
    document.getElementById("right").style.opacity = "1";
    document.getElementById("navbar").style.opacity = "1";
    document.getElementById("new-appointment").style.transform = "scale(0%,0%)";
}
function open_editAppointment(){
    // document.getElementById("right").style.opacity = "0.2";
    // document.getElementById("navbar").style.opacity = "0.2";
    document.getElementById("edit-appointment").style.opacity = "1";
    document.getElementById("edit-appointment").style.transform = "scale(100% , 100%)";
}
function close_editAppointment(){
    document.getElementById("right").style.opacity = "1";
    document.getElementById("navbar").style.opacity = "1";
    document.getElementById("edit-appointment").style.transform = "scale(0%,0%)";
}