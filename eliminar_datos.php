<?php
    include("conexion.php");
    $id = $_POST["id"];

    $sql = "DELETE FROM usuario WHERE idUsuario = $id";

    if($conexion->query($sql) == TRUE){
        echo "  <script language='JavaScript'>
                    alert('Registro eliminado exitosamente'); 
                    window.location.href=\"index.php\";
                </script>";
        }else{
            echo "Error:".$sql."<br>".$conexion->error;
        }
        $conexion -> close();
?>