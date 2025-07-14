<?php 
    require ("connexion.php");

    function inscription($nom, $dtn, $genre, $email, $mdp,$ville)
    {
        $query = "INSERT INTO emprunt_membre (nom, dtn, genre, email, mdp,ville) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
        $query = sprintf($query,  $nom, $dtn, $genre, $email, $mdp,$ville);
        mysqli_query(dbconnect(), $query);
    }

    function login($email, $mdp)
    {
        $query = "SELECT * FROM emprunt_membre WHERE email='%s' AND mdp='%s'";
        $query = sprintf($query, $email, $mdp);
        $result = mysqli_query(dbconnect(), $query);
        return mysqli_fetch_assoc($result);
    }

    function get_objet()
    {
        $query = "SELECT * FROM emprunt_objet JOIN emprunt_emprunt 
        ON emprunt_objet.id = emprunt_emprunt.objet_id 
        JOIN emprunt_membre
        ON emprunt_emprunt.membre_id = emprunt_membre.id";
        $result = mysqli_query(dbconnect(), $query);
        $objets = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $objets[] = $row;
        }
        return $objets;
    }

?>