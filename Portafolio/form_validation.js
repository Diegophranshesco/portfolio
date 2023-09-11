document.querySelector("form").addEventListener("submit", function (event) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    if (name === "" || email === "" || message ==="") {
        alert("Por favor, completa todos los campos.");
        event.preventDefault();
        return;
    }

    const emailRg =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if(!emailRg.test(email)) {
        alert("Por favor, ingresa un correo electronico valido.");
        event.preventDefault();
        return;
    }
})