<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=El nombre es requerido&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=La contraseña es requerida&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=La contraseña es requerida&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=El nombre es requerido&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=La contraseña de confirmación no es la misma&$user_data");
	    exit();
	}

	else{



		// Validacion usuario repetido
		
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=El nombre de Usuario ya esta creado&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Tu cuenta ha sido creada exitosamente");
	         exit();
           }else {
	           	header("Location: signup.php?error=Error Desconocido&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}