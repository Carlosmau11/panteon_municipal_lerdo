var attempt = 3;
function validate() {
    var username = document.getElementById("Usuario").value;
    var password = document.getElementById("Contraseña").value;
    if (username == "Admin" && password == "Municipio2225") {
        window.location = "tables.html";
        return false;
    }

    else{
        alert("Usuario o Contraseña Incorrectos");
    }
    return false;
}