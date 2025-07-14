<?php
    include('../inc/fonction.php');
    session_start();
        $id_objet = $_GET['id'];
        $nbjours = intval($_POST['nbjours']);
        make_emprunt($id_objet, $_SESSION['id'], $nbjours);
            header("Location: liste_objet.php?success=1");
   
    exit();
?>