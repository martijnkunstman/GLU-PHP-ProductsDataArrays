<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkelwagen2</title>
</head>

<body>

    <?php

    $array_producs = [
        ["id" => 201, "titel" => "Apel Asytra Tourer 2012", "prijs" => "$12.000", "kleur" => "rood"],
        ["id" => 202, "titel" => "BMW 10serrie 2024", "prijs" => "$15.000", "kleur" => "rood"],
        ["id" => 203, "titel" => "Mercedes", "prijs" => "$11.000", "kleur" => "rood"],
        ["id" => 204, "titel" => "Audi", "prijs" => "$10.000", "kleur" => "rood"],
        ["id" => 205, "titel" => "Volkswagen", "prijs" => "$9.000", "kleur" => "blauw"],
        ["id" => 206, "titel" => "Fiat", "prijs" => "$8.000", "kleur" => "grijs"],
        ["id" => 207, "titel" => "Renault", "prijs" => "$7.000", "kleur" => "zwart"]
    ];

    $producten = explode("-", $_SESSION["producten_ids"]);

    for ($i = 0; $i < count($producten); $i++) {
        for ($ii = 0; $ii < count($array_producs); $ii++) {
            if ($producten[$i] == $array_producs[$ii]["id"]) {
               //
                    echo($array_producs[$ii]["titel"] . "<br>");
                    echo($array_producs[$ii]["prijs"] . "<br><br>");
               //
            }
        }
    }


    ?>
</body>

</html>