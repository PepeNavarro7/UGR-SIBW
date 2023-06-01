//Variables globales a las que accederemos
var abrir=true
var cajaDesplegable=document.getElementById("desplegable");
var botonComentarios=document.getElementById("boton-comentario");

//Funciones
//Funcion que comprueba mediante expresiones regulares si el formato del email es correcto y si no esta vacio
function comprobarEmail(email){
    if(email!="" && email.search(/^([0-9a-z\.\_]+)+@{1}([0-9a-z]+\.)+[0-9a-z]+$/i)!=-1) // Esto lo he sacado de internet
        return true
    else
        return false
}

//Funcion para abrir y cerrar la caja de los comentarios
function expandirComentarios(){
    if(abrir){
        cajaDesplegable.style.left="0"
        abrir=false;
    }
    else{
        cajaDesplegable.style.left="calc(-1 * min(600px, 55vw))"
        abrir=true;
    }
}

//Funcion que comprueba palabrotas de un array de strings
function palabras_baneadas(){
    var palabrotas = document.getElementById('palabras_baneadas').innerHTML.split("-");
    var texto=document.getElementById("comentario-nuevo");
    for (i=0; i<palabrotas.length; i++){
        aux=palabrotas[i];
        if (texto.value.toLowerCase().includes(aux)){
            texto.value=texto.value.replace(new RegExp(aux, ""), "*".repeat(aux.length));
        }
    }
}

// Los listener
botonComentarios.addEventListener("click", expandirComentarios);