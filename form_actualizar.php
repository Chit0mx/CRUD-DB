<?php
    include("conexion.php");
    $id = $_POST["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Primero jQuery, despues Popper.js, al final Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</head>
<body>
    <form name = "actualizar" action="actualizar_datos.php" method="post">
        <?php
            $sql = "SELECT * FROM usuario WHERE idUsuario = $id";
            $query = $conexion->query($sql);

            if($query == true){
                $info = mysqli_fetch_array($query);{
                    echo 'ID Usuario: <input type="text" value="'.$info['idUsuario'].'"name = "id" disabled = disabled></br>';
                    echo '<input type="text" value="'.$info['idUsuario'].'" name = "id" hidden>';
                    echo 'Nickname: <input type="text" value="'.$info['nickName'].'"name = "nickname"></br>';
                    echo 'Email: <input type="text" value="'.$info['email'].'"name = "email"></br>';
                    echo 'Password: <input type="text" value="'.$info['password'].'"name = "password"></br>';
                }
            }
        ?>
        <div>
            <input type="submit" name = "Actualizar">
        </div>
    </form>
    <?php $conexion->close();?>
</body>
</html>