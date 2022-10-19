function cargaContextoCanvas(idCanvas) { //nececsario en cada uno de los canvas*.js
    let elemento = document.getElementById(idCanvas);
    if (elemento && elemento.getContext) {
        let contexto = elemento.getContext('2d');
        if (contexto) {
            return contexto;
        }
    }
    return false;
}
window.addEventListener('DOMContentLoaded', function () {
    let contexto = cargaContextoCanvas('micanvas1');
    if (contexto) {
        contexto.beginPath();
        contexto.moveTo(50, 15);
        contexto.lineTo(112, 15);
        contexto.lineTo(143, 69);
        contexto.lineTo(112, 123);
        contexto.lineTo(50, 123);
        contexto.lineTo(19, 69);
        contexto.fill();
    }
    contexto = cargaContextoCanvas('micanvas2');
    if (contexto) {
        contexto.fillStyle = "#000099"
        contexto.beginPath();
        contexto.moveTo(50, 15);
        contexto.lineTo(112, 15);
        contexto.lineTo(143, 69);
        contexto.lineTo(112, 123);
        contexto.lineTo(50, 123);
        contexto.lineTo(19, 69);
        contexto.fill();
    }
    contexto = cargaContextoCanvas('micanvas3');
    if (contexto) {
        contexto.strokeStyle = "#009900"
        contexto.beginPath();
        contexto.moveTo(50, 15);
        contexto.lineTo(112, 15);
        contexto.lineTo(143, 69);
        contexto.lineTo(112, 123);
        contexto.lineTo(50, 123);
        contexto.lineTo(19, 69);
        contexto.stroke();
    }
    contexto = cargaContextoCanvas('micanvas4');
    if (contexto) {
        contexto.strokeStyle = "#000099"
        contexto.beginPath();
        contexto.moveTo(50, 15);
        contexto.lineTo(112, 15);
        contexto.lineTo(143, 69);
        contexto.lineTo(112, 123);
        contexto.lineTo(50, 123);
        contexto.lineTo(19, 69);
        contexto.closePath();
        contexto.stroke();
    }
});