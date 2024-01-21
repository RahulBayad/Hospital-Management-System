function open_opd(){
    document.getElementById("right1").style.opacity = "0.2";
    document.getElementById("navbar").style.opacity = "0.2";
    document.getElementById("opd").style.transform = "scale(100% , 100%)";
    // document.getElementById("opd").style.opacity = "1";
}
function close_opd(){
    document.getElementById("right1").style.opacity = "1";
    document.getElementById("navbar").style.opacity = "1";
    document.getElementById("opd").style.transform = "scale(0%,0%)";
}

function close_opdEdit(){
    document.getElementById("right1").style.opacity = "1";
    document.getElementById("navbar").style.opacity = "1";
    document.getElementById("opd_edit").style.transform = "scale(0%,0%)";
}

function openDataInNewTab() {
    // Get the content of the block
    var data = document.getElementById("opd_edit").innerHTML;
    // Open a new tab with the data
    var newTab = window.open();
    

  }