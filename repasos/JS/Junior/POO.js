// class Personaje {
//     constructor(nombre, clase, vida, daño, defensa) {
//         this.name = nombre;
//         this.class = clase;
//         this.life = vida;
//         this.damage = daño;
//         this.defense = defensa;
//         this.info = `Hola, soy ${this.name}, soy un ${this.class} con ${this.life} de vida, ${this.damage} de daño y ${this.defense} de defensa.`;
//     }
//     atacar() {
//         switch(this.class) {
//             case "Guerrero":
//                 console.log(`Este ${this.class} ataca con su Espada.`);
//                 break;
//             case "Asesino":
//                 console.log(`Este ${this.class} ataca con su Daga.`);
//                 break;
//             case "Mago":
//                 console.log(`Este ${this.class} ataca con su Baston.`);
//                 break;
//             case "Arquero":
//                 console.log(`Este ${this.class} ataca con su Arco.`);
//                 break;
//             case "Soporte":
//                 console.log(`Este ${this.class} ataca con su Baculo.`);
//                 break;
//             default:
//                 console.log(`Este ${this.class} no puede atacar.`);
//                 break;
//         }
//     }
// }
// class SuperPersonaje extends Personaje {
//     constructor(nombre, clase, vida, daño, defensa) {
//         super(nombre)
//         this.Sclass = "Super " + clase;
//         this.Slife = 50 + vida;
//         this.Sdamage = 50 + daño;
//         this.Sdefense = 50 + defensa;
//         this.Sinfo = `Hola, soy ${this.name}, soy un ${this.Sclass} con ${this.Slife} de vida, ${this.Sdamage} de daño y ${this.Sdefense} de defensa.`;
//     }
//     SuperAtaque() {
//         switch(this.Sclass) {
//             case "Super Guerrero":
//                 console.log(`Este ${this.Sclass} ataca con su Super Espada.`);
//                 break;
//             case "Super Asesino":
//                 console.log(`Este ${this.Sclass} ataca con su Super Daga.`);
//                 break;
//             case "Super Mago":
//                 console.log(`Este ${this.Sclass} ataca con su Super Baston.`);
//                 break;
//             case "Super Arquero":
//                 console.log(`Este ${this.Sclass} ataca con su Super Arco.`);
//                 break;
//             case "Super Soporte":
//                 console.log(`Este ${this.Sclass} ataca con su Super Baculo.`);
//                 break;
//             default:
//                 console.log(`Este ${this.Sclass} no puede atacar.`);
//                 break;
//         }
//     }
// // static nos permite llamar al metodo o funcion sin crear el objeto, osea "const Jugadorx", pero para usar static no se debe usar nada del constructor ya que justamente el objeto no existe por lo cual daria un error
//     static corroborar() {
//         alert("Este es un Super Personaje.");
//     }
// }

// SuperPersonaje.corroborar();

// const Jugador1 = new Personaje("Perzeus123","Asesino", 200, 90, 10);
// console.log(Jugador1.info);
// console.log(Jugador1.atacar());
// const Jugador2 = new SuperPersonaje("TomykuLoL", "Guerrero", 400, 10, 80);
// console.log(Jugador2.Sinfo);
// console.log(Jugador2.SuperAtaque());

// DESPUES DEBO REPASAR EXTENDS

// Abstraccion: intentar crear metodos que sean generales como por ejemplo (correr, ladrar, gritar).
// Modularidad: intentar solucionar un gran problema a partir de pequeños problemas hasta solucionar el grande.
// Encapsulamiento: encargarse de que los datos del programa no sean accesibles al usuario.
// Polimorfismo:

// class Persona {
//     constructor(nombre, dinero) {
//         this.name = nombre;
//         this.dinner = dinero;
//     }
//     set setDinero(masPlata) {
//         this.dinner = masPlata;
//     }
//     get getNombre() {
//         return this.name;
//     }
// }
// const Humano = new Persona("David", 50);
// console.log(Humano.dinner);
// Humano.setDinero = 20;
// console.log(Humano.dinner);
// console.log(Humano.getNombre);