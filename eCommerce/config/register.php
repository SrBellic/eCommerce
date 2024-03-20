<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom/style.css">
        <title>Registro</title>
    </head>
    <body class="bg-secondary">
        <header class="bg_color-Black py-3">
            <nav class="item_div">
                <a href="../index.php"><img src="../img/logo.svg" width="100px" heigth="50px" class="marginSpace-x ms-5"></a>
                <a class="btn form-btn btn-outline-warning btn-lg marginSpace-x me-5" href="login.php">INICIAR SESIÓN</a>
            </nav>
        </header>
        <main>
            <div class="container bg-light text-black my-4 pb-3 rounded border border-black border-3">
                <h1 class="text-center py-2">Ingresa tus datos</h1>
                <hr class="border border-black opacity-100">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <label for="id" class="form-label">Cedula</label>
                            <input type="number" name="id" class="form-control">
                            <br>
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                            <br>
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control">
                            <br>
                            <label for="adress" class="form-label">Dirección</label>
                            <input type="text" name="adress" class="form-control">
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" name="pass" class="form-control">
                            <br>
                            <label for="pass2" class="form-label">Confirmar contraseña</label>
                            <input type="password" name="pass2" class="form-control">
                            <br>
                            <label for="email" class="form-label">Correo Electronico</label>
                            <input type="text" name="email" class="form-control">
                            <br>
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" name="user" class="form-control">
                            <br>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="REGISTRAR" class="btn btn-primary btn-lg w-50">
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>