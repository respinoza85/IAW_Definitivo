<?php
// Iniciar la sesión
session_start();

// Verificar si la sesión 'usuario_id' está definida
//if (!isset($_SESSION['usuario_id'])) {
    //die("No se ha iniciado sesión.");
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

// Verificar el ID del cliente echo "ID del cliente: " . $id_cliente . "<br>";

// Consulta para obtener los cursos del cliente
$sql = "select * from cursos where Tipo_de_curso = 'Full-Stack'";

// Mostrar mensaje de bienvenida
echo "<h1><marquee>¡Bienvenido! Aquí están los cursos que tienes:</marquee></h1><br><br>";

//$sql = "SELECT c.Id, c.Nombre, c.Tipo_de_curso, c.Precio
  //      FROM cursos c
    //    INNER JOIN usuario u ON c.Id = u.Id
      //  WHERE u.Id = '$id_cliente'";

// Mostrar la consulta SQL
//echo "Consulta SQL: " . $sql . "<br>";

$result = $conn->query($sql);

if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Mostrar los cursos del cliente
    while($row = $result->fetch_assoc()) {
        echo "Nombre del curso: " . $row["Nombre"]. "<br>";
        echo "Tipo de curso: " . $row["Tipo_de_curso"]. "<br>";
        echo "Precio: " . $row["Precio"]. "<br><br>";
    }
} else {
    echo "El cliente no tiene cursos.";
}

// Cerrar el resultado y la conexión
$result->close();
$conn->close();
?>

<html>

<input type="button" onclick="window.location='Udemy.html'" class="Redirect" value="Volver atras"/>
  
</html>
