<!DOCTYPE html>
<html lang="nl">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="Hier kan je een reservering maken voor ons restaurant.">
    <meta name="keywords" content="Umami, Sushi, Restaurant, Gerechten, Menu, All you can eat, HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Halisdzhan Atla">
    <link rel="stylesheet" href="css/stylesheetHalisdzhan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="js/script.js" defer></script>
 
 
</head>
 
<body>
    <?php include 'header.php'; ?>
    <main>
        <form action="verwerk_reservering.php" method="post">
 
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>
 
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
 
 
            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="text" id="telefoonnummer" name="telefoonnummer" required>
 
 
            <label for="allergien">Allergieën:</label>
            <input type="text" id="allergien" name="allergien" required>
 
            <label for="aantal_personen">Aantal Personen:</label>
            <input type="number" id="aantal_personen" name="aantal_personen" required>
 
            <label for="tijdstip">Tijdstip:</label>
            <input type="text" id="tijdstip" name="tijdstip" required>
 
 
            <label for="type_reservering">Type Reservering:</label>
            <select id="type_reservering" name="type_reservering" required>
                <option value="diner">Diner</option>
                <option value="lunch">Lunch</option>
                <option value="ontbijt">Ontbijt</option>
            </select>
 
            <label for="opmerking">Extra opmerkingen -niet verplicht- </label>
            <textarea id="opmerking" name="opmerking" rows="4" cols="50"></textarea>
            <section class="reservation-container">
                <section class="reservation-item">
                    <label for="dag_reservering">Dag Reservering:</label>
                    <select id="dag_reservering" name="dag_reservering" required>
                        <option value="maandag">maandag</option>
                        <option value="dinsdag">dinsdag</option>
                        <option value="woensdag">woensdag</option>
                        <option value="donderdag">donderdag</option>
                        <option value="vrijdag">vrijdag</option>
                        <option value="zaterdag">zaterdag</option>
                        <option value="zondag">zondag</option>
                    </select>
                </section>
 
 
                <section class="reservation-item">
                    <label for="tafels_reservering">Tafel Reservering:</label>
                    <select id="tafels_reservering" name="tafels_reservering" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </section>
            </section>
 
 
 
 
 
 
            <input type="submit" value="Verstuur">
            <br>
            <br>
            <p class="warning-text">Niet het formulier voor niks invullen anders krijg je een boete van 200$. Vul in het formulier als je 100% zeker bent.</p>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
 
</html>
 
