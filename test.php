<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <style>
        .product {
            width: 100px;
            height: 200px;
            border: 1px solid black;
            display: inline-block;
        }
        .title {
            font-size: 12px;
            color: red;
        }

        .price {
            font-size: 10px;
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    //echo("martijn");
    $array_titels = ["Apel Asytra Tourer 2012", "BMW 10serrie 2024", "Mercedes", "Audi", "Volkswagen", "Fiat", "Renault"];
    $array_prijzen = ["$12.000", "$15.000", "$11.000", "$10.000", "$9.000", "$8.000", "$7.000"];
    //echo(count($array_titels)."<br>");
    for ($a = 0; $a < count($array_titels); $a++) {
        //echo($a."<br>");
        echo ("<div class='product'><div class='title'>");
        echo ($array_titels[$a] . "</div><div class='price'>");
        echo ($array_prijzen[$a] . "</div>");
        echo ("</div>");
    }
    ?>
</body>

</html>