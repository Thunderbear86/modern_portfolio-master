//add new icons and fonts


<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="UTF-8">

    <title>Fenris Design</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="stylesheet" href="css/styles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">

</head>

<body id="bg-img">
<header>
    <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>

    <nav class="menu">
        <div class="menu-branding">
            <div class="portrait"></div>
        </div>

        <?php include 'menu.php';?>

    </nav>
</header>

<main id="home">
    <h1 class="lg-heading">
        Thorbjørn
        <span class="text-secondary">Wagner</span>
    </h1>
    <h2 class="sm-heading">
        \\ Kodning \\ Design \\ Marketing \\
    </h2>
    <div class="icons">
        <a href="#!">
            <i class="fab fa-twitter fa-2x"></i>
        </a>
        <a href="#!">
            <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="#!">
            <i class="fab fa-linkedin fa-2x"></i>
        </a>
        <a href="#!">
            <i class="fab fa-github fa-2x"></i>
        </a>
    </div>
</main>

<script src="js/main.js"></script>
</body>

</html>
