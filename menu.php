<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ontdek onze heerlijke Japanse gerechten. Van voorgerechten tot bijgerechten en dranken, bekijk ons uitgebreide menu met verse sushi, miso soep, en meer.">
    <meta name="keywords" content="Umami Sushi, menu, Japans restaurant, sushi, sashimi, voorgerechten, hoofdgerechten, dranken, allergieën, Leiden, culinair, Aziatisch eten">
    <title>Menu - Restaurant</title>
    <meta name="author" content="Dogukan Arslan">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="css/stylesheetDogukan.css">


</head>

<body>

    <?php include 'header.php'; ?>

    <main id="carousel-page">
        <h1 class="menu-title">Onze Menukaart</h1>

        <section class="carousel-container">
            <section class="carousel-header">
                <h2 class="carousel-title">Voorgerecht</h2>
                <section class="carousel-buttons">
                    <button class="carousel-button prev">&#9664;</button>
                    <button class="carousel-button next">&#9654;</button>
                </section>
            </section>
            <section class="carousel-wrapper">
                <section class="carousel">
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/soep.png');"></section>
                        <section class="price-bar">
                            <span>Miso Soep <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: soja, vis"></i></span>
                            <span>€ 4,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/edamame.png');"></section>
                        <section class="price-bar">
                            <span>Edamame <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: soja"></i></span>
                            <span>€ 5,00</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/wakame.png');"></section>
                        <section class="price-bar">
                            <span>Wakame Salade <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: sesam, soja"></i></span>
                            <span>€ 6,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/nigiri.png');"></section>
                        <section class="price-bar">
                            <span>Nigiri Sushi <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: vis, rijst"></i></span>
                            <span>€ 8,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/gyoza.png');"></section>
                        <section class="price-bar">
                            <span>Gyoza <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: gluten, varkensvlees"></i></span>
                            <span>€ 7,50</span>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section class="carousel-container">
            <section class="carousel-header">
                <h2 class="carousel-title">Bijgerecht</h2>
                <section class="carousel-buttons">
                    <button class="carousel-button prev">&#9664;</button>
                    <button class="carousel-button next">&#9654;</button>
                </section>
            </section>
            <section class="carousel-wrapper">
                <section class="carousel">
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/rijst.png');"></section>
                        <section class="price-bar">
                            <span>Witte Rijst <i class="fas fa-info-circle allergy-info" data-allergy="Glutenvrij"></i></span>
                            <span>€ 2,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/gember.png');"></section>
                        <section class="price-bar">
                            <span>Gember <i class="fas fa-info-circle allergy-info" data-allergy="Kan sporen van sulfiet bevatten"></i></span>
                            <span>€ 1,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/wasabi.png');"></section>
                        <section class="price-bar">
                            <span>Extra Wasabi <i class="fas fa-info-circle allergy-info" data-allergy="Kan mosterd bevatten"></i></span>
                            <span>€ 1,00</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/mayonaise.png');"></section>
                        <section class="price-bar">
                            <span>Spicy Mayonaise <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: ei, mosterd"></i></span>
                            <span>€ 1,00</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/sojasaus.png');"></section>
                        <section class="price-bar">
                            <span>Sojasaus <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: soja, tarwe"></i></span>
                            <span>€ 1,00</span>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section class="carousel-container">
            <section class="carousel-header">
                <h2 class="carousel-title">Drinken</h2>
                <section class="carousel-buttons">
                    <button class="carousel-button prev">&#9664;</button>
                    <button class="carousel-button next">&#9654;</button>
                </section>
            </section>
            <section class="carousel-wrapper">
                <section class="carousel">
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/groenthee.png');"></section>
                        <section class="price-bar">
                            <span>Groene Thee <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: cafeïne"></i></span>
                            <span>€ 2,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/japanbier.png');"></section>
                        <section class="price-bar">
                            <span>Japans Bier <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: gluten, alcohol"></i></span>
                            <span>€ 4,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/sake.png');"></section>
                        <section class="price-bar">
                            <span>Sake warm/koud <i class="fas fa-info-circle allergy-info" data-allergy="Bevat: alcohol, rijst"></i></span>
                            <span>€ 6,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/frisdrank.png');"></section>
                        <section class="price-bar">
                            <span>Frisdrank <i class="fas fa-info-circle allergy-info" data-allergy="Kan suiker of zoetstoffen bevatten"></i></span>
                            <span>€ 2,50</span>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="image-placeholder" style="background-image: url('images/water.png');"></section>
                        <section class="price-bar">
                            <span>Water <i class="fas fa-info-circle allergy-info" data-allergy="Geen allergenen"></i></span>
                            <span>€ 1,50</span>
                        </section>
                    </section>
                </section>
            </section>
        </section>

    </main>

    <?php include 'footer.php'; ?>

</html>