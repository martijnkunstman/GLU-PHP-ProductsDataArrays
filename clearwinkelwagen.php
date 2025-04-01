<?php
    session_start();
    $_SESSION["products"] = "";
    header('Location: winkelwagen.php');
?>