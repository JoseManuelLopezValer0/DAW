
function cambiara() {
    document.getElementById('alt').innerHTML=document.getElementById('alto').value ;
}
function cambiarc() {
    document.getElementById('anc').innerHTML=document.getElementById('ancho').value ;
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
    window.addEventListener('DOMContentLoaded', function () {
        let contexto = cargaContextoCanvas('micanvas');
        document.getElementById('alt').innerHTML=micanvas.width;
        document.getElementById('anc').innerHTML=micanvas.height;
        if (contexto) {
            
            const j=10;
            const e=j/2;
            b=((micanvas.width/j)+1);
            a=((micanvas.height/j)+1);
            x=0;
            y=0;
            contexto.beginPath();
            contexto.moveTo(0, 0);
            for (let i = 0; i < b; i++) {
                contexto.lineTo(0, y);
                contexto.lineTo(x, y);
                contexto.lineTo(x, 0);
                contexto.lineTo(0, 0);
                x+=j;
                y+=e;
            }
            contexto.translate(micanvas.width, 0);
            contexto.scale(-1, 1);
            contexto.stroke();
            //codigo en reverso
            contexto.moveTo(micanvas.width, micanvas.height);
            x=micanvas.width;
            y=micanvas.height;
            for (let i = 0; i < b; i++) {
                contexto.lineTo(micanvas.width, y);
                contexto.lineTo(x, y);
                contexto.lineTo(x, micanvas.height);
                contexto.lineTo(micanvas.width, micanvas.height);
                x-=j;
                y-=e;
            }
            contexto.stroke();
            contexto.closePath();
            contexto.fillStyle = "rgba(0, 0, 0, 0.5)";
            contexto.fill();    
            
            contexto.save();      
            
        }
        
    });
    function dibujar(){
        console.clear();
        console.log("alto: " + document.getElementById('alt').innerHTML);
        console.log("ancho: " + document.getElementById('anc').innerHTML);
    };