function cambiara() {
    document.getElementById('alt').innerHTML = document.getElementById('alto').value;
}

function cambiarc() {
    document.getElementById('anc').innerHTML = document.getElementById('ancho').value;
}

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
let contexto = cargaContextoCanvas('micanvas');
window.addEventListener('DOMContentLoaded', function () {
    document.getElementById('alt').innerHTML = micanvas.width;
    document.getElementById('anc').innerHTML = micanvas.height;
    dibujar();
    }

);

function dibujar() {
    console.clear();
    console.log("alto: " + document.getElementById('alt').innerHTML);
    console.log("ancho: " + document.getElementById('anc').innerHTML);
    
    //dubujamos
    contexto = cargaContextoCanvas('micanvas');
    contexto.clearRect(0, 0, micanvas.width, micanvas.height);
    if (contexto) {
        const j = 10;
        const e = j / 2;
        b = ((document.getElementById('alto').value / j) + 1);
        a = ((document.getElementById('ancho').value / j) + 1);
        x = 0;
        y = 0;
        contexto.beginPath();
        contexto.moveTo(0, 0);
        for (let i = 0; i < b; i++) {
            contexto.lineTo(0, y);
            contexto.lineTo(x, y);
            contexto.lineTo(x, 0);
            contexto.lineTo(0, 0);
            x += j;
            y += e;
        }
        contexto.translate(500, 0);
        contexto.scale(-1, 1);
        contexto.stroke();
        //codigo en reverso
        contexto.moveTo(document.getElementById('alto').value, document.getElementById('ancho').value);
        x = document.getElementById('alto').value;
        y = document.getElementById('ancho').value;
        for (let i = 0; i < b; i++) {
            contexto.lineTo(document.getElementById('alto').value, y);
            contexto.lineTo(x, y);
            contexto.lineTo(x, document.getElementById('ancho').value);
            contexto.lineTo(document.getElementById('alto').value, document.getElementById('ancho').value);
            x -= j;
            y -= e;
        }
        contexto.stroke();
        contexto.closePath();
        contexto.fillStyle = "rgba(0, 0, 0, 0.5)";
        contexto.fill();
        contexto.save();
    }
};
function bucle(){
    
        do {
            dibujarbucle();
        } while (document.getElementById('bucle').checked=false);        
};
function dibujarbucle() {
    
    contexto = cargaContextoCanvas('micanvas');
    contexto.clearRect(0, 0, micanvas.width, micanvas.height);
    if (contexto) {
        const j = 10;
        const e = j / 2;
        contexto.save();
        b = ((document.getElementById('alto').value / j) + 1);
        a = ((document.getElementById('ancho').value / j) + 1);
        x = 0;
        y = 0;
        contexto.beginPath();
        contexto.moveTo(0, 0);
        for (let i = 0; i < b; i++) {
            contexto.lineTo(0, y);
            contexto.lineTo(x, y);
            contexto.lineTo(x, 0);
            contexto.lineTo(0, 0);
            x += j;
            y += e;
        }
        contexto.translate(500, 0);
        contexto.scale(-1, 1);
        contexto.stroke();
        //codigo en reverso
        contexto.moveTo(document.getElementById('alto').value, document.getElementById('ancho').value);
        x = document.getElementById('alto').value;
        y = document.getElementById('ancho').value;
        for (let i = 0; i < b; i++) {
            contexto.lineTo(document.getElementById('alto').value, y);
            contexto.lineTo(x, y);
            contexto.lineTo(x, document.getElementById('ancho').value);
            contexto.lineTo(document.getElementById('alto').value, document.getElementById('ancho').value);
            x -= j;
            y -= e;
        }
        contexto.stroke();
        contexto.closePath();
        contexto.fillStyle = "rgba(0, 0, 0, 0.5)";
        contexto.fill();
    }
    setTimeout(function () {
        contexto.clearRect(0, 0, micanvas.width, micanvas.height);
        dibujarbucle();
    }, 100);
};
