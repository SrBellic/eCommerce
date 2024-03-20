<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicia Sesión</title>
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom/style.css">
    </head>
    <body class="bg-secondary">
        <header class="bg_color-Black py-3">
            <nav class="item_div">
                <a href="../index.php"><img src="../img/logo.svg" width="100px" heigth="50px" class="marginSpace-x ms-5"></a>
                <a class="btn form-btn btn-outline-warning btn-lg marginSpace-x me-5" href="register.php">REGISTRAR</a>
            </nav>
        </header>
        <main class="container bg-light rounded border border-black border-2 my-5 w-50">
            <h1 class="text-center py-2">INICIA SESIÓN</h1>
            <section>
                <div class="row">
                    <picture class="bg-black col-sm-2 col-lg-6 d-sm-none d-md-none d-lg-block">
                        <img src="../img/logo.svg" width="300px" heigth="300px" class="mx-2">
                    </picture>
                    <div class="col-sm-12 col-md-12 col-lg-6 d-sm-block py-3 pb-5 border-top border-black border-2">
                        <form action="#">
                            <label for="login" class="form-label fs-4">Inicia Sesión</label>
                            <!Validar en php el limite del correo>
                            <input type="email" name="login" class="form-control" maxlength="30">
                            <br>
                            <label for="pass" class="form-label fs-4">Contraseña</label>
                            <!Validar en php el limite de la contraseña>
                            <input type="password" name="pass" class="form-control" minlength="8" maxlength="12">
                            <div class="text-center">
                                <input type="submit" value="INGRESAR" class="btn btn-primary mt-3 w-50">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include('footer.php');
        ?>
    </body>
</html>