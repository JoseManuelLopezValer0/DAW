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
    let contexto = cargaContextoCanvas('micanvas8');
    if (contexto) {
        let img = new Image();
        img.src = `índice.jpg`;
        img.addEventListener('load', function () {
            // cargar imagen basica 
            // contexto.drawImage(image: CanvasImageSource, dx: posicion x, dy: posicion x)

            // cargar imagen escalada
            // contexto.drawImage(image: CanvasImageSource, dx: posicion x, dy: posicion y, dw: ancho, dh: alto)

            // cargar imagen  recortada y escalada
            // contexto.drawImage(image: CanvasImageSource, sx: punto inicio recorte x, sy: punto inicio recorte y, sw: ancho recorte, sh: alto recorte, dx: posicion x, dy: posicion y, dw: ancho  dh: alto)

            contexto.drawImage(img, 0, 0, );
            contexto.drawImage(img, 0, 1090, 960, 516);
            contexto.drawImage(img, 900, 516, 960, 516, 0, 1650, 1920, 1080);
        });
    }

});