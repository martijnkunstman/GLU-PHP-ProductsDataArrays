<?php
    session_start();
    echo($_GET['id']);
    $_SESSION["producten_ids"] = $_SESSION["producten_ids"] . "-" . $_GET['id'];
    header('Location: start.php');
?>