<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            border: 1px solid black;
            margin: 10px;
            display: inline-block;
        }

        a {
            color: white;
            padding: 5px;
            text-decoration: none;
            background-color: blue;
            border-radius: 10px;
        }

        a:hover {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php
    $array_producs = [
        ["id" => 201, "titel" => "Apel Asytra Tourer 2012", "prijs" => "$12.000", "prijsgetal" => 12000, "kleur" => "rood"],
        ["id" => 202, "titel" => "BMW 10serrie 2024", "prijs" => "$15.000", "prijsgetal" => 15000, "kleur" => "rood"],
        ["id" => 203, "titel" => "Mercedes", "prijs" => "$11.000", "prijsgetal" => 11000, "kleur" => "rood"],
        ["id" => 204, "titel" => "Audi", "prijs" => "$10.000", "prijsgetal" => 10000, "kleur" => "rood"],
        ["id" => 205, "titel" => "Volkswagen", "prijs" => "$9.000", "prijsgetal" => 9000, "kleur" => "blauw"],
        ["id" => 206, "titel" => "Fiat", "prijs" => "$8.000", "prijsgetal" => 8000, "kleur" => "grijs"],
        ["id" => 207, "titel" => "Renault", "prijs" => "$7.000", "prijsgetal" => 7000, "kleur" => "zwart"]
    ];


    $minimaal_prijs = 1;
    if(isset($_GET["min"])){
        $minimaal_prijs = $_GET["min"];
    }


    for ($i = 0; $i < count($array_producs); $i++) {
        if ($array_producs[$i]["prijsgetal"] > $minimaal_prijs) {
            echo ("<div>");
            echo ($array_producs[$i]["titel"] . "<br>");
            echo ($array_producs[$i]["prijs"] . "<br>");
            echo ($array_producs[$i]["kleur"] . "<br>");
            echo ("<a href='plaatsinwinkelwagen.php?id=" . $array_producs[$i]["id"] . "'>bestel</a>");
            echo ("</div>");
        }
    }
    ?>

    <a href="winkelwagen2.php">
        <div>winkelwagen</div>
    </a><br>
    <div>aantal producten in winkelwagen: <?php

                                            echo (count(explode('-', $_SESSION["producten_ids"])) - 1);

                                            ?></div><br>
    <a href="winkelwagenleegmaken.php">
        <div>winkelwagen leegmaken</div>
    </a><br>

    <input type="range" min="1" max="16000" value="1000" class="slider" id="myRange">

    <?php

    echo ($_SESSION["producten_ids"]);

    ?>


</body>

</html>