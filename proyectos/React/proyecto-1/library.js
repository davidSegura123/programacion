// esta funcion crea una etiqueta y se encarga de darle los atributos que le digamos
export function createElement(element, attribute = {}) {
    const Elmt = document.createElement(element);
    let keys = Object.keys(attribute);
    keys.map(k => Elmt.setAttribute(k, attribute[k]));
    return Elmt;
}
// esta funcion se encarga de insertar una etiqueta en otra 
export function render(anyElement, rootElement) {
    let rootElmt = document.getElementById(rootElement);
    rootElmt.appendChild(anyElement);
}