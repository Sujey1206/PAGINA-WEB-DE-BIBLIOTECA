var arrayImagenes = ["biografia.jpg", "reseña1.jpg", "anexos.jpg"];
var imagenActual = 0;
var temporizador;
temporizador = setInterval(cambiarImagen, 2000);
document.getElementById("anterior").addEventListener("click", cambiarImagen);
document.getElementById("siguiente").addEventListener("click", cambiarImagen);
document.getElementById('imagen').addEventListener("mouseover", pararTemporizador);
document.getElementById('imagen').addEventListener("mouseout", iniciarTemporizador);

function cambiarImagen() {
    var boton = this.id;
    if (boton != undefined) {
        clearInterval(temporizador);
        temporizador = setInterval(cambiarImagen, 2000)
    }
    if (boton == 'anterior') {
        imagenActual--;
        if (imagenActual < 0) {
            imagenActual = arrayImagenes.length - 1;
        }
    } else {
        imagenActual++;
        if (imagenActual == arrayImagenes.length) {
            imagenActual = 0;
        }
    }
    var imagenAMostrar = arrayImagenes[imagenActual];
    document.getElementById('imagen').src = 'Imagenes/' + imagenAMostrar;
}
function pararTemporizador() {
    clearInterval(temporizador);
}
function iniciarTemporizador() {
    temporizador = setInterval(cambiarImagen, 2000);
}