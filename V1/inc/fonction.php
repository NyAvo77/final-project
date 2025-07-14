<?php 
    require ("connexion.php");

    function inscription($nom, $dtn, $genre, $email, $mdp)
    {
        $query = "INSERT INTO emprunt_membre (nom, date_naissance, genre, email, mot_de_passe) VALUES ('%s', '%s', '%s', '%s', '%s')";
        $query = sprintf($query,  $nom, $dtn, $genre, $email, $mdp);
        mysqli_query(dbconnect(), $query);
    }

    function login($email, $mdp)
    {
        $query = "SELECT * FROM emprunt_membre WHERE email='%s' AND mot_de_passe='%s'";
        $query = sprintf($query, $email, $mdp);
        $result = mysqli_query(dbconnect(), $query);
        return mysqli_fetch_assoc($result);
    }

    
?>