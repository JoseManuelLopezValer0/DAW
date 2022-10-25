//Si quieres guardar la fecha de navidad de 2019:
let navidad2019 = new Date('12-25-2019');
console.log(navidad2019); // Devuelve Wed Dec 25 2019 00:00:00 GMT+0100 (hora estándar de Europa central)

//Si quieres saber qué día fue navidad en 2019:
console.log(navidad2019.getDate()); // Devuelve 25

//Si quieres guardar el momento exacto en el que se ejecutó una parte del codigo:
let momentoEjecucion = new Date();

// Si quieres saber cuántos milisegundos han pasado desde el 1 de enero de 1970 a las 00:00 hasta la navidad del 2019:
navidad2019.getTime();

// Si quieres crear una fecha con el formato DD/MM/YYYY
let fechaFormateada = navidad2019.toLocaleDateString();
