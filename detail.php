<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    Hier komen de details van het product.
    <?php
    include("product_data.php");
    echo ($_GET["id"]);
    echo("<br>");
    for ($a = 0; $a < count($array_producs); $a++) {
        if ($_GET["id"] == $array_producs[$a]["id"]) {
            echo ("<div class='product'><div class='title'>");
            echo ($array_producs[$a]["titel"] . "</div><div class='price'>");
            echo ($array_producs[$a]["prijs"] . "</div>");
            echo ("<div class='kleur'>" . $array_producs[$a]["kleur"] . "</div>");
            //echo ("<div><a href='detail.php?id=" . $array_producs[$a]["id"] . "'>toon details</a></div>");
            echo ("</div>");
        }
    }
    ?>
    <br><br>
    <a href="test.php">terug</a>
</body>

</html>