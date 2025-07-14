<?php
    include("../inc/fonction.php");
    $mail=$_POST["email"];
    $mdp=$_POST["mdp"];

    $mailSess=login($mail, $mdp);
    if($mailSess==1){
        $_SESSION["mdp"]=$mdp;
        $_SESSION["mail"]=$mail;
        $_SESSION["id"]=get_id_by_mail($mail);
        $_SESSION["nom"]=get_id_by_mail($mail);
        header("Location: liste_objet.php");
    }else{
        $_SESSION["erreur"]=$mailSess;
        header("Location: login.php");
    }
?>