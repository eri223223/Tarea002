<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LODZ</title>

    <link rel="icon" type="image/x-icon" href="<?php echo APP_URL ?>../views/img/logop.png" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL ?>../views/css/style.css">
    <link rel="icon" type="image/x-icon" href="views/src/logo-small.png">
</head>

</head>
<body>
    <header>

    </header>

    <main>
    <?php include_once "views/" . ('../' . ($view ?? "index.php")); ?>
    </main>

    <footer>
        
    </footer>
</body>
</html>