<?php
    include("../inc/fonction.php");
    $mail=$_POST["email"];
    $mdp=$_POST["mdp"];

    $mailSess=login($mail, $mdp);
    header("Location:liste_objet.php");
?>