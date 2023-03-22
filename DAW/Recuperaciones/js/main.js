document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("contextmenu", function (e) {
      e.preventDefault();
    });
    window.addEventListener("load", function () {
      setTimeout(function () {
          document.querySelector(".contenido").classList.add("aparecer");
          document.querySelector(".contenido").style.display = "block";
      }, 100);
    });
  });
  