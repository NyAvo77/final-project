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
        $query = "SELECT * FROM emprunt_objet
            JOIN emprunt_emprunt ON emprunt_objet.id_objet = emprunt_emprunt.id_objet
            JOIN emprunt_membre ON emprunt_emprunt.id_membre = emprunt_membre.id_membre
            JOIN emprunt_categorie ON emprunt_objet.id_categorie = emprunt_categorie.id_categorie";
            

        $result = mysqli_query(dbconnect(), $query);
        $objets = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $objets[] = $row;
        }
        return $objets;
    }

    function get_categorie()
    {
        $query = "SELECT * FROM emprunt_categorie";
        $result = mysqli_query(dbconnect(), $query);
        $categories = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
        return $categories;
    }

    function get_objet_filtred($id)
    {
        if($id==0)
        {
            return get_objet();
        }
        else
        {
            $query = "SELECT * FROM emprunt_objet
            JOIN emprunt_emprunt ON emprunt_objet.id_objet = emprunt_emprunt.id_objet
            JOIN emprunt_membre ON emprunt_emprunt.id_membre = emprunt_membre.id_membre
            JOIN emprunt_categorie ON emprunt_objet.id_categorie = emprunt_categorie.id_categorie
            WHERE emprunt_objet.id_categorie = %d";
            $query = sprintf($query, $id);
            $result = mysqli_query(dbconnect(), $query);
            $resultat = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $resultat[] = $row;
            }
            return $resultat;
        }
    }

?>