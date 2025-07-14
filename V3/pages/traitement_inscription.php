<?php
    $nom=$_POST["nom"];
    $dtn=$_POST["dtn"];
    $email=$_POST["email"];
    $mdp=$_POST["mdp"];
    $ville=$_POST["ville"];
    $genre=$_POST["genre"];
    require("../inc/fonction.php");
    inscription($nom, $dtn, $genre, $email, $mdp, $ville);
    header("Location: login.php");
?> 