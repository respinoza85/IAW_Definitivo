<?php
// Iniciar sesión
session_start();
 
// Conexión a la base de datos
$db = mysqli_connect('localhost', 'root', '', 'saturno');
 
$errors = [];

// Si se ha enviado el formulario
if (isset($_POST['login_button'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 
  // Comprobar si el email es válido
  $query = "SELECT * FROM usuario WHERE Email='$email'";
  $results = mysqli_query($db, $query);
 
  if (mysqli_num_rows($results) == 1) {
    // Email válido, verificar contraseña
    $row = mysqli_fetch_assoc($results);
    if (password_verify($password, $row['Contraseña'])) {
      // Inicio de sesión válido
      $_SESSION['usuario_id'] = $row['id'];
      //aqui entra a la pagina una vez halla iniciado session
      header('location: Udemy.html');
    } else {
      // Contraseña inválida
      $errors[] = "Email/contraseña inválidos";
    }
  } else {
    // Email inválido
    $errors[] = "Email/contraseña inválidos";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
</head>
<body>
  <div class="container">
    <div class="d-flex min-vh-100">
      <div class="row d-flex flex-grow-1 justify-content-center align-items-center">
        <div class="col-md-4 form login-form">
          <form action="login.php" method="POST" autocomplete="off">
            <h2 class="text-center">Inicio de sesión</h2>
              
              <?php
              if (count($errors) > 0) {
                echo "<div class='alert alert-danger' role='alert'>";
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo "</div>";
              }
              ?>
              
              <div class="form-group mb-3">
                  <input type="text" name="email" class="form-control" placeholder="Correo electrónico" required>
              </div>
              <div class="form-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
              </div>
              <div class="form-group mb-3">
                  <input type="submit" name="login_button" class="form-control btn btn-primary" value="Acceder">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</body>
</html>
