let puntos = 1;
console.log(puntos);
alert("Bienvenido!");
let nombre = prompt("Cual es tu nombre?");
alert(`Hola ${nombre}, ahora estare haciendote unas preguntas con el fin de probar que tanto sabes sobre lol.`);
let main = prompt("Cual es tu personaje main del lol?");
alert(`Okay, ${main} entonces, vere que tanto sabes sobre el.`);
let creacion = prompt(`${main} en que fecha se estreno en el lol?`);
if (creacion == 2015) {
    if (puntos < 10) {
        puntos++;
    }
    alert("Correcto! sigamos con la sigueinte pregunta.");
} else {
    if (puntos > 0) {
        puntos--;
    }
    alert("Incorrecto, suerte en la proxima.");
}
console.log(puntos);