<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Resultaat - Onkunde</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultaat - Onkunde</h1>
        <nav>
            <a href="index.html">Home</a> | <a href="paniek.html">Er heerst paniek...</a> | <a href="Onkunde.html">Onkunde</a>
        </nav>
    </header>
    <main>
        <?php
        function validate_input($input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($_POST as $key => $value) {
                $_POST[$key] = validate_input($value);
            }
        
            $kunnen = $_POST['kunnen'];
            $persoon = $_POST['persoon'];
            $getal = $_POST['getal'];
            $vakantie = $_POST['vakantie'];
            $eigenschap_goed = $_POST['eigenschap_goed'];
            $eigenschap_slecht = $_POST['eigenschap_slecht'];
            $ergste = $_POST['ergste'];
        }
        
        $result_text = "Onkunde is een kunst. Het is iets dat je niet zomaar kunt $kunnen. Je hebt er talent voor nodig of je moet het oefenen. Iemand die veel heeft geoefend is $persoon. Z'n favoriete getal is $getal en als je vraagt waar hij graag zijn vakantie doorbrengt, krijg je als antwoord: $vakantie. Als hij niet aan het oefenen is met onkunde, houdt hij zich bezig met $eigenschap_goed. $persoon heeft een bijzondere eigenschap: hij is namelijk $eigenschap_slecht. Het ergste wat hem kan overkomen is $ergste.";
        
        echo nl2br($result_text);

        ?>
    </main>
    <footer>
        &copy; 2023 Alexander den Otter
    </footer>
</body>
</html>