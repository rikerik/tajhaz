<?php

echo '
<head>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exp/style.css">

    <script type="text/javascript" src="exp/script.js"></script>

    <title>Eperfa tájház</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">


</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Ugrás az oldal tetejére</button>
    <header class="banner">
        <h1>Üdvözöllek az Eperfa Tájház kapujában!</h1>
    </header>
    ' ?>

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

<?php
echo '

    <div class="topnav">

        <a class="' ?> <?php if ($currentPage == "index.php") {
                            echo "active";
                        } else {
                            echo "noactive";
                        } ?> <?php echo ' " href="index.php">Főoldal</a>
        <a class="' ?> <?php if ($currentPage == "galeria.php") {
                            echo "active";
                        } else {
                            echo "noactive";
                        } ?> <?php echo ' "a href="galeria.php">Galéria</a>
        <a class="' ?> <?php if ($currentPage == "kapcsolat.php") {
                            echo "active";
                        } else {
                            echo "noactive";
                        } ?> <?php echo ' "a href="kapcsolat.php">Kapcsolat</a>
        <a class="' ?> <?php if ($currentPage == "informaciok.php") {
                            echo "active";
                        } else {
                            echo "noactive";
                        } ?> <?php echo ' "a href="informaciok.php">Információk</a>
        <a class="' ?> <?php if ($currentPage == "velemenyek.php") {
                            echo "active";
                        } else {
                            echo "noactive";
                        } ?> <?php echo ' "a href="velemenyek.php">Vélemények</a>
    </div>
    
</body>'

                                                ?>