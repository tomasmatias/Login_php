<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Inicio de Sesión</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nombre de Usuario:</label>
     	<input type="text" name="uname" placeholder="Ingrese Nombre de Usuario"><br>

     	<label>Contraseña:</label>
     	<input type="password" name="password" placeholder="Ingrese Contraseña"><br>

     	<button type="submit">Iniciar Sesión</button>
          <a href="signup.php" class="ca">Click para crear Usuario</a>
     </form>
</body>
</html>