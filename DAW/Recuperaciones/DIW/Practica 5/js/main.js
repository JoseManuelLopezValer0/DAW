function cargaContextoCanvas(idCanvas) {
  let elemento = document.getElementById(idCanvas);
  if (elemento && elemento.getContext) {
    let contexto = elemento.getContext("2d");
    if (contexto) {
      return contexto;
    }
  }
  return false;
}
window.addEventListener("DOMContentLoaded", function () {
  let contexto = cargaContextoCanvas("1canvas");
  if (contexto) {
    contexto.beginPath();
    contexto.arc(100, 100, 50, 0, Math.PI * 2, true);
    contexto.moveTo(100, 100);
    contexto.lineTo(100, 50);
    contexto.moveTo(100, 100);
    contexto.lineTo(150, 100);
    contexto.moveTo(100, 100);
    contexto.lineTo(100, 150);
    contexto.moveTo(100, 100);
    contexto.lineTo(50, 100);
    contexto.moveTo(100, 100);
    contexto.lineTo(50, 50);
    contexto.moveTo(100, 100);
    contexto.lineTo(150, 50);
    contexto.moveTo(100, 100);
    contexto.lineTo(50, 150);
    contexto.moveTo(100, 100);
    contexto.lineTo(150, 150);
    contexto.stroke();
    contexto.closePath();
  } 

  let contexto2 = cargaContextoCanvas("2canvas");
  if (contexto2) {
    let img = new Image();
    img.src = "img/imagen.jpg";
    img.onload = function () {
      contexto2.drawImage(img, 0, 0, 300, 300, 0, 0, 100, 100);
    };
    let img2 = new Image();
    img2.src = "img/imagen.jpg";
    img2.onload = function () {
      contexto2.drawImage(img2, 0, 0, 200, 200, 0, 200, 200, 200);
    };
  }

  let contexto3 = cargaContextoCanvas("3canvas");
  if (contexto3) {
    contexto3.beginPath();
    contexto3.arc(100, 100, 50, 0, Math.PI * 2, true);

    let grd = contexto3.createLinearGradient(0, 0, 200, 0);
    grd.addColorStop(0, "red");
    grd.addColorStop(1, "white");
    contexto3.fillStyle = grd;
    contexto3.fill();
    contexto3.font = "30px Arial";
    contexto3.fillText("Circulo", 100, 200);
  }
});
