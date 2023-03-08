document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
  });
  window.addEventListener("load", function () {
    setTimeout(function () {
      document.querySelector(".barra-progreso").classList.add("llena");
      setTimeout(function () {
        document.querySelector(".contenedor-carga").style.display = "none";
        document.querySelector(".contenido").classList.add("aparecer");
        document.querySelector(".contenido").style.display = "block";
      }, 1000);
    }, 500);
  });
});
