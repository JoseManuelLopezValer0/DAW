function metodo1() {
  let numeros = [1, 2, { 3: 3, 5: 5 }];
  let c1 = numeros.slice();
  let c2 = numeros.slice();
  c2[2][5] = 55;
  console.log(c1);
  console.log(c2);
  console.log(numeros);
}

function metodo2() {
  let numeros = [1, 2, { 3: 3, 5: 5 }];
  let c1 = JSON.parse(JSON.stringify(numeros));
  let c2 = JSON.parse(JSON.stringify(numeros));
  c2[2][5] = 55;
  console.log(c1);
  console.log(c2);
  console.log(numeros);
}

console.log("Método 1");
// console.log(" ");
metodo1();

// console.log(" ");
console.log("Método 2");
// console.log(" ");
metodo2();

//la diferencia es que el método 1 copia el array y el objeto, pero el método 2 copia el array y el objeto pero no el valor de la clave 5, sino que lo cambia a 55.

function destructuracion() {
  let cadena = "Zenda Menchú";
  let [nombre, apellido] = cadena.split(" ");
  console.log(nombre);
  console.log(apellido);
}

// console.log(" ");
console.log("Destructuración");
// console.log(" ");
destructuracion();

let ordenar = ["dolar", "dólar", "Amigo", "ánimo", "Ágora", "Decisicón"];

function ordena(array) {
  array.sort((a, b) => a.localeCompare(b));
  console.log(array);
}

// console.log(" ");
console.log("Ordenar");
// console.log(" ");
ordena(ordenar);

let alumnas = [
  { nombre: "Anacleta", apellido: "Cándida" },
  { nombre: "Manola", apellido: "CÁNTICO" },
  { nombre: "Simona", apellido: "Carola" },
];

function ordenarPorApellido(alumnas) {
  alumnas.sort((a, b) => a.apellido.localeCompare(b.apellido));
  console.log(alumnas);
}

// console.log(" ");
console.log("Ordenar por apellido");
// console.log(" ");
ordenarPorApellido(alumnas);
