const numero = 123456.789;
console.log(new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(numero));
// Salida "123.456,79 €"
// — — — — — — — —
var numero2 = 123456.789;
// En el alemán la coma se utiliza como separador decimal y el punto para los millares
console.log(new Intl.NumberFormat('de-DE').format(numero2));
// → 123.456,789
// La clave de extensión nu requiere un sistema de numeración, p.ej. el decimal chino
console.log(new Intl.NumberFormat('zh-Hans-CN-u-nu-hanidec').format(numero2));
// → 一二三,四五六.七八九
// — — — — — — — —
// En la mayoría de los países de lengua arábiga se utilizan también símbolos arábigos
console.log(new Intl.NumberFormat('ar-EG').format(numero2));
// → ١٢٣٤٥٦٫٧٨٩
