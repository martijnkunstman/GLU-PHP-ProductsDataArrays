<?php
    session_start();
    $_SESSION["producten_ids"] = "";
    header('Location: start.php');
?>