<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="Hier zie je informatie over ons restaurant en de gerechten die wij serveren.">
    <meta name="keywords" content="Umami, Sushi, Restaurant, Gerechten, Menu, All you can eat, HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Halisdzhan Atla">
    <link rel="stylesheet" href="css/stylesheetHalisdzhan.css">
    <script src="js/script.js" defer></script>
</head>

<body >
    <?php include 'header.php'; ?>
    <main>

        <img id="landingimg" src="images/sushihead.jpg" alt="Homepage sushi time">
        <article id="greeting-H">
            <h1>Welkom bij Umami Sushi!</h1>
        </article>

        <iframe id="video-H" src="https://www.youtube.com/embed/soY-z-GDVn4" frameborder="0" allowfullscreen></iframe>

        <article id="greetingRestaurant-H">
            <h1>Hier zie je ons restaurant</h1>
        </article>

        <section class="event-banner-H">
            <img id="event-image-H" src="images/allEat.jpg" alt="All you can eat sushi">
            <section class="event-info-H">
                <br>
                <br>
                <br>
                <h2>All you can eat evenement!</h2>
                <br>
                <p>Bij Umami Sushi - De smaak die blijft hangen!</p>
                <br>
                <br>
                <br>
            </section>
        </section>

        <section id="gerechten-Ht">
            <br>
            <br>
            <h1 id="gerechtenmove-H">Gerechten</h1>
            <br>
            <section class="gerechten-H">
                <img src="images/nigiriH.avif" alt="Nigiri ontbijt">
                <img id="hidesesam-H" src="images/seaweed sesam.png" alt="Miso Ontbijt">
                <img id="misosoup-H" src="images/miso soup.jpg" alt="Miso Ontbijt">
            </section>

            <section class="menu-button-H">
                <h1>Bekijk ons menu</h1>
                <button onclick="redirectToMenu()">Bekijk</button>
            </section>

        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <article id="umamisushislogan-H">
            <img id="sushilogo-H" src="images/umamislogan.jpg" alt="slogan passend logo">
            <p>Umami Sushi - Traditionele Japanse smaken, een authentieke beleving! Geniet van verse sushi en tijdloze recepten in ons sfeervolle restaurant.</p>
        </article>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>

</html>