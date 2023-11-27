<?php
// Conexión a la base de datos (ajusta las credenciales según tu configuración)
$conexion = new mysqli("nombre_del_servidor", "usuario", "contraseña", "nombre_de_la_base_de_datos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Consulta SQL para obtener datos de la tabla de difuntos
$sql = "SELECT * FROM difuntos";
$resultado = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Crear la estructura de la tabla HTML
    echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
    echo "<thead><tr><th>ID</th><th>Nombre</th><th>Sexo</th><th>Fecha de Fallecimiento</th></tr></thead>";
    echo "<tbody>";

    // Iterar sobre los resultados y mostrar cada fila
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["id_difuntos"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["sexo"] . "</td>";
        echo "<td>" . $fila["fecha"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    // Mensaje si no hay resultados
    echo "No hay difuntos registrados.";
}

// Cerrar la conexión
$conexion->close();
?>