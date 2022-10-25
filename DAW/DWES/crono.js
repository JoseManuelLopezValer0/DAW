/** @author López */

function cambiaTiempo() {
  document.getElementById("min").value =
    document.getElementById("minutos").value;
  document.getElementById("sec").value =
    document.getElementById("segundos").value;
}

function iniciar() {
  var min = document.getElementById("min").value;
  var sec = document.getElementById("sec").value;
  var tiempo = min * 60 + sec;
  var intervalo = setInterval(function () {
    tiempo--;
    var min = Math.floor(tiempo / 60);
    var sec = tiempo % 60;
    document.getElementById("min").value = min;
    document.getElementById("sec").value = sec;
    if (tiempo == 0) {
      clearInterval(intervalo);
      document.getElementById("end").value = "FIN";
    }
  }, 1000);
}
