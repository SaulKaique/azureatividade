function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (password !== confirmPassword) {
        document.getElementById("message").innerHTML = "As senhas não coincidem.";
        return false;
    }

    // Aqui você pode adicionar mais validações, se necessário.

    return true;
}