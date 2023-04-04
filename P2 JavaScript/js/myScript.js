var show = true;
function myFunction() {
    if(show){
        show = false;
        document.getElementById("panelComentarios").style.display="none";
    } else {
        document.getElementById("panelComentarios").style.display="Block";
        show = true;
    }
}
