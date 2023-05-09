import { createElement, render } from "./library.js";
const Form = createElement("form", {
    "id": "form",
    "action": "validate.php",
    "method": "post"
});
render(Form, "body");
const Divs = () => {
    return (
        <>
            <p>lso atributos son sencibles al camelCase</p>
            <p>se debe evitar usar class ya que esta es reservada para la POO, entonces podemos hacerlo de esta manera</p>
            <div className="container1">
                <p>
                    se deben de usar las flechas de esa manera para <br />
                    poder tener mas elementos padre en la variable
                </p>
            </div>
            <div className="container2">
                <p>
                    {ejemplo}las etiquetas de solo apertura deben tener si o si la barra al final
                </p>
                <img src="ningunaLado.txt" />
                <label htmlFor="nombre">Nombre:</label><p>lo mismo pasa con el for de un label</p>
                <input type="text" name="nombre" required />
            </div>
            <div /><p>esto en html no existe, pero en jsx lo traduce como una etiqueta vacia</p>
        </>
    )
}
const Article = ({ title, content, img1 }) => {
    return (
        <div className="container">
            <div className="title">
                {title}
            </div>
            <div className="content">
                {content}
                <img src={img1} />
            </div>
        </div>
    )
}
Article({
    title: "Mi articulo",
    content: "Bienvenido",
    img1: "imagen.png"
})