<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LODZ</title>

    <link rel="icon" type="image/x-icon" href="<?php echo APP_URL ?>../views/img/logop.png" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL ?>views/css/style.css">
    <link rel="icon" type="image/x-icon" href="views/src/logo-small.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

</head>
<body>
    <header class="header">
            <div class="logo" href="<?php echo APP_URL ?>../index.php">
                <img src="views/src/logo.png" alt="LODZ">
            </div>
            <nav>
                <ul class="links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                </ul>
            </nav>
            <a href="#" class="btn"><button>Contacto</button></a>
        </header>
    </header>

    <main class="container">
    <?php include_once "views/" . ('../' . ($view ?? "index.php")); ?>
    </main>

    <footer class="footer">
        <div id="column1">
            <div style="display: flex; align-items: center; margin-left: 10%; width: 390px;">
                <img src="views/src/logo.png" alt="Logo de EventoXpress" width="50" height="60" style="margin-rigth: 6px">  
            </div>
            <p class="oracion" style="font-size: 16px">Eleginos para poder tener la mejor experiencia <br> leyendo sobre el arte de la historia.</p>
            <div class="social">
                <img src="<?php echo APP_URL ?>views/icons/facebook.svg"></img>
                <img src="<?php echo APP_URL ?>views/icons/twitterX.svg"></img>
                <img src="<?php echo APP_URL ?>views/icons/instagram.svg"></img>
            </div>
        </div>

            <p style="font-size: 16px;">© 2024 Todos los derechos reservados: LODZ ®</p>
       
    </footer>
</body>
</html>