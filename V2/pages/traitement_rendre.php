<?php
    include('../inc/fonction.php');
    session_start();
    $obj=$_POST['id_objet'];
    $mbr=$_POST['id_membre'];
    $etat=$_POST['etat'];
    rendre_objet($obj, $mbr, $etat);
    header('Location: liste_objet.php');
    
?>