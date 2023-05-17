<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Resultaat - Er heerst paniek...</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultaat - Er heerst paniek...</h1>
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
        
            $dier = $_POST['dier'];
            $persoon = $_POST['persoon'];
            $land = $_POST['land'];
            $vervelen = $_POST['vervelen'];
            $speelgoed = $_POST['speelgoed'];
            $docent = $_POST['docent'];
            $geld = $_POST['geld'];
            $bezigheid = $_POST['bezigheid'];
        }
        
        $result_text = "Er heerst paniek in het koninkrijk $land. Koning $docent is ten einde raad en als koning
        $docent ten einde raad is, dan roept hij zijn ten-einde-raadsheer $persoon. \"$persoon! Het is een ramp! Het is een schande!\"
        
        \"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?\"
        
        \"Mijn $dier is verdwenen! Zo maar zonder waarschuwing. En ik had net $speelgoed voor hem gekocht!\"
        
        \"Majesteit, uw $dier komt vast vanzelf weer terug?\"
        
        \"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd $bezigheid leren?\"
        
        \"Maar Sire, daar kunt u toch uw $geld voor gebruiken?\"
        
        \"$persoon, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had?\"
        
        \"$vervelen, Sire.\"";
        
        echo nl2br($result_text);
        

        ?>
    </main>
    <footer>
        &copy; 2023 Alexander den Otter
    </footer>
</body>
</html>