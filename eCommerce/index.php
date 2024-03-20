<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom/style.css">
        <title>TodoRepuestos</title>
    </head>
    <body class="bg-secondary">
        <header class="bg_color-Black py-3">
            <nav class="item_div">
                <a href="#"><img src="img/logo.svg" width="100px" heigth="50" class="marginSpace-x ms-5"></a>
                <ul class="navbar_x">
                    
                    <form action="#" method="POST">
                        <input class="form-control" type="search" placeholder="Buscar">
                    </form>
                    <form action="#" method="post" class="mx-4">
                        <a class="btn btn-outline-warning btn-sm marginSpace-x" href="config/register.php">REGISTRAR</a>
                        <a class="btn btn-outline-warning btn-sm marginSpace-x" href="config/login.php">INICIAR SESIÓN</a>
                        <a class="btn btn-outline-warning btn-sm marginSpace-x">CARRITO</a>
                    </form>
                </ul>
            </nav>
        </header>
        <main class="item_center">
            <aside class="container ms-4 border border-dark border-2 rounded bg-light col-sm-3 col-md-3 col-lg-2 col-xl-2 ">
                <ul class="py-5 fs-5 container">
                    <li class="marginSpace-y_10"><a href="#">Moyota</a></li>
                    <li class="marginSpace-y_10"><a href="#">Moyard</a></li>
                    <li class="marginSpace-y_10"><a href="#">Moyari</a></li>
                    <li class="marginSpace-y_10"><a href="#">Moyabini</a></li>
                    <li class="marginSpace-y_10"><a href="#">VolksMoyagen</a></li>
                </ul>
            </aside>
            <div class="marginSpace-x"></div>
            <div class="container bg-light rounded-bottom border border-dark border-top-0 border-3 mx-5">
                <div class="row py-5">
                    <div class="col px-5">
                        <section class="item_center mt-4 mx-5 py-5 border border-dark">
                            <a href="#"><img src="img/logo.svg" width="100px" heigth="50" class="marginSpace-x"></a>
                            <!Detalles de productos debajo de la imagen de cada uno>
                        </section>
                        <section class="item_center mt-4 mx-5 py-5 border border-dark">
                            <a href="#"><img src="img/logo.svg" width="100px" heigth="50" class="marginSpace-x"></a>
                            <!Detalles de productos debajo de la imagen de cada uno>
                        </section>
                    </div>
                    <div class="col px-5">
                        <section class="item_center mt-4 mx-5 py-5 border border-dark">
                            <a href="#"><img src="img/logo.svg" width="100px" heigth="50" class="marginSpace-x"></a>
                            <!Detalles de productos debajo de la imagen de cada uno>
                        </section>
                        <section class="item_center mt-4 mx-5 py-5 border border-dark">
                            <a href="#"><img src="img/logo.svg" width="100px" heigth="50" class="marginSpace-x"></a>
                            <!Detalles de productos debajo de la imagen de cada uno>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include('config/footer.php');
        ?>
    </body>
</html>