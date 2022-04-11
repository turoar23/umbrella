<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Nuestra carta tiene sabores que no dejara a nadie indiferente. Para todos los gustos, no somos otra smash burger más, somos tu nueva smash burger favorita">
    <meta name="keywords" content="Umbrella sociedad de hamburguesas, menu umbrella, carta umbrella, burgers en alicante, hamburguesas en alicante, smash burger menu, smash burger">

    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">

    <title>Umbrella SH | Menú</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="(max-width:799px)" href="/css/style-small.css">
    <link rel="stylesheet" media="(min-width:800px)" href="/css/style-large.css">

    <?php include('./comun/cookies.php'); ?>
    
    <?php include('./comun/google.php'); ?>

</head>
<?php include('./carta/burgers.php'); ?>
<?php include('./carta/sides.php'); ?>
<?php include('./carta/extras.php'); ?>
<?php include('./carta/bebidas.php'); ?>
<?php include('./carta/postres.php'); ?>

<body>
    <?php include('./comun/nav.php'); ?>
    <main class="menu">
        <div class="title categories">
            <h1>Descubre nuestra carta</h1>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light" id="categories">
            <a class="navbar-brand" href="#">Categorias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#burgers">Burgers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sides">Sides</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bebidas">Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#postres">Postres</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Perritos (Próximamente)</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="" id="burgers">
                <h2>Burgers</h2>
                <?php if(date('Y-m-d') <= '2022-01-09' ) : ?>
                <div class="row">
                    <div class="col-md-3 item-card">
                        <div class="item">
                            Edición especial
                            <div class="header">
                                Beety Smash<sub style="font-size:.5em">By Tepuy</sub>
                            </div>
                            <div class="img">
                                <img src="/img/burgers/beety.jpg" alt="Beety Smash Burger" loading="lazy" /><?= "\n" ?>
                            </div>
                            <div class="body">
                                Burger doble con salsa Beety, doble de queso cheddar y bacon.
                            </div>
                            <div class="footer">
                                <p>Pollo crispy <span class="right">9,10€</span></p>
                                <p>Ternera rubia gallega <span class="right">9,30€</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row">
                    <?php foreach ($burgers as $key => $burger) : ?>
                        <div class="col-md-3 item-card">
                            <div class="item">
                                <div class="header">
                                    <?= $burger['nombre']; ?><?= "\n" ?>
                                </div>
                                <div class="img">
                                    <img src="<?= $burger['img'] ?>" alt="<?= $burger['alt']; ?>" loading="lazy" /><?= "\n" ?>
                                </div>
                                <div class="body">
                                    <?= $burger['descripcion']; ?><?= "\n" ?>
                                </div>
                                <div class="footer">
                                    <p>Pollo crispy <span class="right"><?= $burger['pollo']; ?></span></p>
                                    <p>Ternera rubia gallega <span class="right"><?= $burger['ternera']; ?></span></p>
                                </div>
                            </div>
                        </div>
                        <?php if (($key + 1) % 4 == 0) : ?>
                </div><?= "\n" ?>
                <div class="row"><?= "\n" ?>
                <?php endif; ?>
            <?php endforeach; ?>
                </div>
                <div class="row">
                    <h2>Extras de carne</h2>
                    <h3>Haz tu burger más grande</h3>
                    <div class="col-md-12 item-card">
                        <div class="item">
                            <div class="header">
                                <?php foreach ($extras_carte as $extra) : ?>
                                    <p>
                                        <?= $extra['nombre']; ?><?= "\n" ?>
                                        <span class="right"><?= $extra['precio']; ?><?= "\n" ?></span>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2>Extras gratis</h2>
                    <h3>Añade cualquiera de estos extras por 0€</h3>
                    <div class="col-md-12 item-card">
                        <div class="item">
                            <div class="header">
                                <?php foreach ($extras_gratis as $extra) : ?>
                                    <p>
                                        <?= $extra; ?><?= "\n" ?>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2>Extras</h2>
                    <div class="col-md-12 item-card">
                        <div class="item">
                            <div class="header">
                                <?php foreach ($extras as $extra) : ?>
                                    <p>
                                        <?= $extra['nombre']; ?><?= "\n" ?>
                                        <span class="right"><?= $extra['precio']; ?><?= "\n" ?></span>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="sides">
                <h2>Sides</h2>
                <div class="row">
                    <div class="col-md-12 item-card">
                        <div class="item">
                            <div class="header">
                                <?php foreach ($sides as $side) : ?>
                                    <p>
                                        <?= $side['nombre']; ?><?= "\n" ?>
                                        <span class="right"><?= $side['precio']; ?><?= "\n" ?></span>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="bebidas">
                <h2>Bebidas</h2>
                <div class="row">
                    <div class="col-md-12 item-card">
                        <div class="item">
                            <div class="header">
                                <?php foreach ($bebidas as $bebida) : ?>
                                    <p>
                                        <?= $bebida['nombre']; ?><?= "\n" ?>
                                        <span class="right"><?= $bebida['precio']; ?><?= "\n" ?></span>
                                    </p>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="postres">
                <h2>Postres</h2>
                <h3>Prueba una de nuestras tartas caseras hechas con mucho amor ❤ de la mano de la <a href="https://www.instagram.com/amazonia_coffee/?hl=es" target="blank_" rel="noopener">@amazonia_coffee</a>.</h3>
                <div class="row">
                    <?php foreach ($postres as $key => $postre) : ?>
                        <div class="col-md-3 item-card">
                            <div class="item">
                                <div class="header">
                                    <?= $postre['nombre']; ?><?= "\n" ?>
                                </div>
                                <div class="img">
                                    <img src="<?= $postre['img'] ?>" alt="<?= $postre['alt']; ?>" /><?= "\n" ?>
                                </div>
                                <div class="body">
                                    <?= $postre['descripcion']; ?><?= "\n" ?>
                                </div>
                                <div class="footer">
                                    <?= $postre['precio'] ?>
                                </div>
                            </div>
                        </div>
                        <?php if (($key + 1) % 4 == 0) : ?>
                </div><?= "\n" ?>
                <div class="row"><?= "\n" ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="" id="perritos">
            </div>
                </div>
    </main>
    <?php include('./comun/footer.php'); ?>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async></script>

    <script src="js/scripts.js"></script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("categories");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>
