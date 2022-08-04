<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Registrarse</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nombre</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ingrese Nombre"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ingrese Nombre"><br>
          <?php }?>

          <label>Nombre de Usuario</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Ingrese Nombre de Usuario"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Ingrese Nombre de Usuario"><br>
          <?php }?>


     	<label>Contraseña</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Contraseña"><br>

          <label>Ingrese Contraseña Nuevamente</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Ingrese Contraseña Nuevamente"><br>

     	<button type="submit">Registrarse</button>
          <a href="index.php" class="ca">Ya tienes un usuario?</a>
     </form>
</body>
</html>