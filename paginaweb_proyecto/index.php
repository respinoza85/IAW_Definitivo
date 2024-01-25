<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro SCIII</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<div class="group">
  <form action="registro_conexion.php" method="POST">
  <h2><em>Formulario de Registro</em></h2>  
    
      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="Nombre" class="form-input" required/>   
      
      <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
      <input type="text" name="Apellido" class="form-input" required/>  
      
      <label for="contraseña">Contraseña <span><em>(requerido)</em></span></label>
      <input type="password" name="Contraseña" class="form-input" required/> 
      
      <label for="email">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="Email" class="form-input" />
     <center> <input class="form-btn" name="submit" type="submit" value="Suscribirse" /></center><br>
     <center><input class="form-btn" onclick="window.location='login.php'" class="Redirect" value="¿Tienes cuenta? Inicia Sesion."/></center>
    </p>
  </form>
</div>
</body>
</html>
