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
    let contexto = cargaContextoCanvas('micanvas10');
    if (contexto) {
        contexto.fillStyle = 'rgb(255,0,0)';
        contexto.fillRect(0, 0, 300, 200);
        contexto.StrokeRect(0, 0, 200, 300);

        contexto.fillStyle = 'white';
        contexto.fillRect(10, 60, 280, 130);
        contexto.fillStyle = 'rgb(128,128,128)';
        contexto.StrokeRect(10, 60, 280, 130);

        contexto.font = 'bold 1.8em sans-serif';
        contexto.fillText("Hola mi nimbre es",20,40);
        contexto.fillStyle="black";
        contexto.textAling ="Center";
        
    }

});