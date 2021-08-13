<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
    <section>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10"><br>
                <h3>Registrarse</h3>
                <form action="Insertar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="Categoria">Nickname</label>
                                <input type="text" class="form-control" name="nickName" id="nickName"
                                    placeholder="Escribe aquí tu Nickname"><br>
                                <label for="Marca">email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Escribe aquí tu email"><br>
                            </div>
                            <div class="col">
                                <label for=" Motor">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Escribe aqui tu Contraseña"><br>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Registrar</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>