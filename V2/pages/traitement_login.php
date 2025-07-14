
<?php
    session_start();
    include("../inc/fonction.php");
    $mail = $_POST["email"];
    $mdp = $_POST["mdp"];
    $user = [];
    $user = login($mail, $mdp);
    if ($user) {
        $_SESSION["mdp"] = $mdp;
        $_SESSION["mail"] = $mail;
        $_SESSION["id"] = $user["id_membre"];
        $_SESSION["nom"] = $user["nom"];
        header("Location: liste_objet.php");
        exit();
    } else {
        $_SESSION["erreur"] = "Identifiants incorrects";
        header("Location: login.php");
        exit();
    }

?>