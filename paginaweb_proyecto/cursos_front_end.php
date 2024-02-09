<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <link rel="stylesheet" type="text/css" href="estilos_cursos.css"> <!-- Aquí es donde enlazas tu archivo CSS -->
</head>
<body>
    <!-- Contenido de tu página aquí -->
    <?php
  // Iniciar la sesión
session_start();

// Verificar si la sesión 'usuario_id' está definida
//if (!isset($_SESSION['usuario_id'])) {
  //  die("No se ha iniciado sesión.");
//}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "saturno";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del cliente de la sesión
//$id_cliente = $_SESSION['usuario_id'];

// Verificar el ID del cliente
//echo "ID del cliente: " . $id_cliente . "<br>";

// Consulta para obtener los cursos del cliente
$sql = "SELECT * FROM cursos WHERE Tipo_de_curso = 'Front_end'";

// Mostrar mensaje de bienvenida
echo "<h1><marquee>¡Bienvenido! Aquí están los cursos que tienes:</marquee></h1><br><br>";


$result = $conn->query($sql);

if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}
?>

<div style="font-size: 18px; font-family: Arial;">
<?php
    if ($result->num_rows > 0) {
        // Mostrar los cursos del cliente
        while($row = $result->fetch_assoc()) {
            echo "<strong>Nombre del curso:</strong> " . $row["Nombre"]. "<br>";
            echo "<strong>Tipo de curso:</strong> " . $row["Tipo_de_curso"]. "<br>";
            echo "<strong>Precio:</strong> " . $row["Precio"]. "<br><br>";
        }
    } else {
        echo "El cliente no tiene cursos.";
    }
?>
</div>

<?php
// Cerrar el resultado y la conexión
$result->close();
$conn->close();
    ?>
</body>
</html>
<html>
      
<input type="button" onclick="window.location='Udemy.html'" class="Redirect" value="Volver atras"/>

</html>
