<?php
    include("conexion.php");

	$nickName = $_POST['nickName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sqlRegistro = "INSERT INTO usuario (nickName, email, password) VALUES ('$nickName','$email','$password')";

	$message = "Usuario registrado con exito";

	if($conexion -> query($sqlRegistro) == TRUE ){
		echo"<script type='text/javascript'>
		alert('$message');
		window.location.href = \"form.html\";
		</script>";
	}else{
		echo "Error: ".$sqlRegistro."<br>".$conexion -> error;
	}

	$conexion -> close();

?>