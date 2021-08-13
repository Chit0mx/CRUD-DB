<?php
    include("conexion.php");
    $id = $_POST['id'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "UPDATE usuario SET nickName = '$nickname', email = '$email', password = '$pass' WHERE idUsuario = $id";

    if($conexion->query($sql) == TRUE){
	echo "  <script language='JavaScript'>
                alert('Registro actualizado exitosamente'); 
                window.location.href=\"index.php\";
            </script>";
    }else{
        echo "Error:".$sql."<br>".$conexion->error;
    }
    $conexion -> close();
?>