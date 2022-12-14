// @author: Jose Manuel Lopez Valero
function mostrarBienvenida(num) {
  let cadena;
  let numero = num;
  switch (numero) {
    case 1:
      cadena =
        "Bienvenido a mi humilde morada. Esta es la primera vez que entras. Espero que vuelvas.";
      break;
    case 2:
      cadena =
        "Hola de nuevo. Ya estás aquí por segunda vez. ¿Volveremos a vernos?.";
      break;
    case 0:
      cadena = "RESETEADO";
      break;
    default:
      cadena =
        "Ya empiezas a ser pesado. Esta es la vez número " +
        numero +
        " que entras. Sigue con tus cosas.";
      break;
  }
  return cadena;
}

function Volver() {
  history.back();
}

const boton = document.getElementById("back");
// document.addEventListener("click", boton , Volver() );
document.addEventListener("DOMContentLoaded", function () {
  mostrarBienvenida();
});
