
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

// Récupérer l'id de l'objet ajouté
$id_objet = mysqli_insert_id(dbconnect());


// Traitement de l'image si envoyée
if (isset($_FILES["image_objet"]) && $_FILES["image_objet"]["error"] == UPLOAD_ERR_OK) {
    $nom_image = basename($_FILES["image_objet"]["name"]);
    $chemin = __DIR__ . "../../assets/images/" . $nom_image; // chemin dynamique basé sur le dossier actuel
    move_uploaded_file($_FILES["image_objet"]["tmp_name"], $chemin);

    // Ajouter l'image dans la base de données
    upload_image($nom_image);
}

header("Location: liste_objet.php");
exit();
?>