<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plan uw bezoek aan ons Japanse restaurant. Bekijk onze openingstijden, locatie en contactgegevens. Reserveer nu voor een onvergetelijke culinaire ervaring.">
    <meta name="keywords" content="Umami Sushi, openingstijden, restaurant uren, lunch, diner, reserveren, locatie, adres, contactgegevens, Leiden, Japans restaurant">
    <title>Openingstijden - Restaurant</title>
    <meta name="author" content="Dogukan Arslan">	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/stylesheetDogukan.css">

</head>

<body>


    <?php include 'header.php'; ?>
    <section class="container">

        <section class="header-openingstijden">
            <h1>Umami Sushi</h1>
            <p>Vind Jouw Favoriete Locatie <i class="fa-solid fa-location-dot"></i></p>
            <p>Overal Beschikbaar In Elke Stad</p>
        </section>
        <section id="info">
            <h2 style="color: orange;">Je Vindt Ons In <span><i class="fa-solid fa-arrow-right-long" style="color: orange;"></i></span></h2>
            <p>Galgewater 12<br>2311VZ Leiden</p>
        </section>
        <section id="map" class="map"></section>

        <section class="hours">
            <table>
                <tr>
                    <th>Ma</th>
                    <td>12:30 - 22:00</td>
                </tr>
                <tr>
                    <th>Di</th>
                    <td>12:30 - 22:00</td>
                </tr>
                <tr>
                    <th>Wo</th>
                    <td>~Gesloten~</td>
                </tr>
                <tr>
                    <th>Do</th>
                    <td>12:30 - 22:00</td>
                </tr>
                <tr>
                    <th>Vr</th>
                    <td>12:30 - 22:00</td>
                </tr>
                <tr>
                    <th>Za</th>
                    <td>12:30 - 22:00</td>
                </tr>
                <tr>
                    <th>Zo</th>
                    <td>12:30 - 22:00</td>
                </tr>
            </table>
        </section>

        <section class="contact">
            <h1>Vragen? Contact Ons Op De Volgende Gegevens</h1>
            <p>E-mail: info@umamileiden.nl<br>Telefoonnummer: 088-2324456</p>
        </section>

    </section>
</body>
<?php include 'footer.php'; ?>

</html>