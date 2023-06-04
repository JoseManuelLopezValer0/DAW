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

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementsByClassName("boton-cerrar")[0]
    .addEventListener("click", function () {
      document.getElementsByClassName("publicidad")[0].style.display = "none";
    });
});
window.addEventListener("DOMContentLoaded", function () {
  let contexto = cargaContextoCanvas("1canvas");
  if (contexto) {
    contexto.beginPath();
    contexto.moveTo(10, 20);
    contexto.lineTo(10, 90);
    contexto.lineTo(50, 80);
    contexto.lineTo(50, 10);
    contexto.lineTo(10, 20);
    contexto.lineTo(50, 10);
    contexto.lineTo(90, 20);
    contexto.lineTo(90, 90);
    contexto.lineTo(50, 80);
    contexto.moveTo(90, 20);
    contexto.lineTo(90, 90);
    contexto.lineTo(100, 80);
    contexto.lineTo(100, 10);
    contexto.lineTo(90, 20);
    contexto.lineTo(100, 10);
    contexto.lineTo(50, 0);
    contexto.lineTo(50, 10);
    contexto.lineTo(50, 0);
    contexto.lineTo(0, 10);
    contexto.lineTo(10, 20);
    contexto.lineTo(0, 10);
    contexto.lineTo(0, 80);
    contexto.lineTo(10, 90);
    
    contexto.stroke();
    contexto.closePath();
  }
});


// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()