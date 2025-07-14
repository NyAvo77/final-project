
<?php
session_start();
include("../inc/fonction.php");

// Vérifier que l'utilisateur est connecté
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit();
}

// Récupérer les données du formulaire
$nom_objet = $_POST["nom_objet"];
$id_categorie = $_POST["id_categorie"];
$id_membre = $_SESSION["id"];

// Ajouter l'objet dans la base
ajout_objet($nom_objet, $id_categorie, $id_membre);

header("Location: liste_objet.php");
exit();
?>