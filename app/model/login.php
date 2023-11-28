<?php
// Conecta a la base de datos
$conn = new mysqli("localhost", "root", "1234qwerty", "syscopa");

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtiene los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

// Consulta la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Las credenciales son válidas, inicia la sesión
    session_start();
    $_SESSION['doomy'] = $nombre_usuario;
    header("Location: ../view/index.php");
    exit();
} else {
    // Las credenciales son incorrectas, muestra un mensaje de error
    echo "Nombre de usuario o contraseña incorrectos.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>