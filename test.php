<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //echo("martijn");
    //$array_titels = ["Apel Asytra Tourer 2012", "BMW 10serrie 2024", "Mercedes", "Audi", "Volkswagen", "Fiat", "Renault"];
    //$array_prijzen = ["$12.000", "$15.000", "$11.000", "$10.000", "$9.000", "$8.000", "$7.000"];
    //echo(count($array_titels)."<br>");

    include("product_data.php");
    //
    for ($a = 0; $a < count($array_producs); $a++) {
        //echo($a."<br>");
        echo ("<div class='product'><div class='title'>");
        echo ($array_producs[$a]["titel"] . "</div>");
        echo ("<div><a href='detail.php?id=" . $array_producs[$a]["id"] . "'>toon details</a></div>");
        echo ("</div>");
    }
    ?>
</body>

</html>