class Personaje {
    constructor(nombre, clase, vida, daño, defensa) {
        this.name = nombre;
        this.class = clase;
        this.life = vida;
        this.damage = daño;
        this.defense = defensa;
        this.info = `
        Hola, soy un ${this.class} llamado ${this.name}, tengo ${this.life} de vida, ${this.damage} de daño y ${this.defense} de defensa.`;
    }
    set modificarNombre(newName) { // error en el setter
        this.name = newName;
    }
    Attack() {
        switch (this.class) {
            case "Guerrero":
                return `${this.name} ataca con su Espada.`;
            case "Soldado":
                return `${this.name} ataca con su Rifle.`;
            case "Mago":
                return `${this.name} ataca con un Ataque de Energia.`;
            default:
                return `${this.name} no ataca.`;
        }
    }
}
class SuperPersonaje extends Personaje {
    constructor(nombre, clase, vida, daño, defensa) {
        super(nombre, clase, vida, daño, defensa)
        this.superClass = `Super ${clase}`;
        this.superDamage = 20 + daño;
        this.superInfo = `
        Hola, soy un ${this.superClass} llamado ${this.name}, tengo ${this.life} de vida, ${this.superDamage} de daño y ${this.defense} de defensa.`;
    }
    SuperAttack() {
        switch (this.class) {
            case "Guerrero":
                return `${this.name} invoca una Espada desde el cielo.`;
            case "Soldado":
                return `${this.name} acierta un dispado desde 2000m.`;
            case "Mago":
                return `${this.name} lanza una Genkidama.`;
            default:
                return `${this.name} no tiene un super ataque.`;
        }
    }
}

const jugador1 = new Personaje("TomykuLoL", "Guerrero", 200, 10, 10);
const jugador2 = new SuperPersonaje("Perzeus123", "Soldado", 100, 15, 4);
const jugador3 = new Personaje("Isaku777", "Mago", 120, 25, 3);

document.write(jugador1.info+"<br>");
document.write(jugador1.Attack()+"<br>");

document.write(jugador2.superInfo+"<br>");
document.write(jugador2.SuperAttack()+"<br>");

document.write(jugador3.info+"<br>");
document.write(jugador3.Attack()+"<br>");

jugador1.modificarNombre("Asheee");
document.write(jugador1.name);