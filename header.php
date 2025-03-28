<!DOCTYPE html>
<html lang="nl">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Responsive Website</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/script.js" defer></script>
    <meta author = "halisdzhan Atla">
    <meta description = "Dit is het header van website">
    <meta keywords = "header, website, restaurant, menu, openingstijden, reservering, vacatures, nav">
</head>
 
<body>
    <header>
        <nav>
            <img id="headerlogo" src="images/Header_logos.png" alt="">
            <ul class="nav-links">
                <a href="inlandpagina.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="openingstijden.php">Openingstijden</a>
                <a href="reservering.php">Reservering</a>
                <a href="vacatures.php">Vacatures</a>
            </ul>
            <section class="menu-toggle" onclick="toggleMenu()">☰</section>
        </nav>
        <ul class="mobile-menu">
            <li class="liHide"><a href="inlandpagina.php">Home</a></li>
            <li class="liHide"><a href="menu.php">Menu</a></li>
            <li class="liHide"><a href="openingstijden.php">Openingstijden</a></li>
            <li class="liHide"><a href="reservering.php">Reservering</a></li>
            <li class="liHide"><a href="vacatures.php">Vacatures</a></li>
        </ul>
    </header>
</body>
</html>
 