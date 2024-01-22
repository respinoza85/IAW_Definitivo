<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "saturno";
$db_table_name = "usuario";

$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
    die('No se ha podido conectar a la base de datos');
}

$subs_name = utf8_decode($_POST['Nombre']);
$subs_last = utf8_decode($_POST['Apellido']);
$subs_contraseña = password_hash(utf8_decode($_POST['Contraseña']), PASSWORD_DEFAULT); // Hash de la contraseña
$subs_email = utf8_decode($_POST['Email']);

$resultado = mysqli_query($db_connection, "SELECT * FROM " . $db_table_name . " WHERE Email = '" . $subs_email . "'");

if (mysqli_num_rows($resultado) > 0) {
    header('Location: Fail.html');
} else {
    $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` (`Nombre`, `Apellido`, `Contraseña`, `Email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_contraseña. '", "' . $subs_email . '")';

    mysqli_select_db($db_connection, $db_name);
    $retry_value = mysqli_query($db_connection, $insert_value);

    if (!$retry_value) {
        die('Error: ' . mysqli_error($db_connection));
    }

    header('Location: Success.html');
}

mysqli_close($db_connection);
?>
