const password = document.getElementById('contraseña');
const button = document.getElementById('boton');
button.addEventListener('click', () => {
    if(password.type === "password") {
        password.type = "text";
    } else if(password.type === "text") {
        password.type = "password";
    } else {
        alert("Error.");
    }
});