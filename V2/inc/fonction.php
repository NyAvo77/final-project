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

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
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

    function get_id_by_mail($mail){
        $query = "SELECT id_membre FROM emprunt_membre WHERE email='%s';";
        $query = sprintf($query, $mail);
        $result = mysqli_query(dbconnect(), $query);
        $row = mysqli_fetch_assoc($result);

        return $row;
    }

    function get_name_by_mail($mail){
        $query = "SELECT nom FROM emprunt_membre WHERE email='%s';";
        $query = sprintf($query, $mail);
        $result = mysqli_query(dbconnect(), $query);
        $row = mysqli_fetch_assoc($result);

        return $row;
    }

    function get_categorie_id($nom)
    {
        $query = "SELECT * FROM emprunt_categorie WHERE nom_categorie = '%s'";
        $query = sprintf($query, $nom);
        $result = mysqli_query(dbconnect(), $query);

        return mysqli_fetch_assoc($result);
    }
    
    function ajout_objet($nom_objet, $id_categorie, $id_membre)
    {
        $query = "INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('%s', %d, %d)";
        $query = sprintf($query, $nom_objet, $id_categorie, $id_membre);
        mysqli_query(dbconnect(), $query);
    }

    function upload_image($image)
    {
        $query = "INSERT INTO emprunt_image (nom_image) VALUES ('%s')";
        $query = sprintf($query, $image);
        mysqli_query(dbconnect(), $query);
    }

    function get_user($mail)
    {
        $query = "SELECT * FROM emprunt_membre WHERE email='%s';";
        $query = sprintf($query, $mail);
        $result = mysqli_query(dbconnect(), $query);
        $mety = mysqli_fetch_assoc($result);
        return $mety;
    }
    
    function get_fiche($id)
    {
        $query = "SELECT * FROM emprunt_objet
            JOIN emprunt_emprunt ON emprunt_objet.id_objet = emprunt_emprunt.id_objet
            JOIN emprunt_membre ON emprunt_emprunt.id_membre = emprunt_membre.id_membre
            JOIN emprunt_categorie ON emprunt_objet.id_categorie = emprunt_categorie.id_categorie
            WHERE emprunt_objet.id_objet='%s';";
        $query=sprintf($query,$id);
        $result = mysqli_query(dbconnect(), $query);
        $objets = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $objets[] = $row;
        }
        return $objets;
    }

    function get_membre(){
        $query = "SELECT * FROM emprunt_membre";
        $result = mysqli_query(dbconnect(), $query);
        $membres = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $membres[] = $row;
        }
        return $membres;
    }

    function get_fiche_membre($id)
    {
        $query = "SELECT * FROM emprunt_membre JOIN emprunt_objet ON emprunt_membre.id_membre = emprunt_objet.id_membre
        WHERE emprunt_membre.id_membre='%s';";
        $query=sprintf($query,$id);
        $result = mysqli_query(dbconnect(), $query);
        $membres = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $membres[] = $row;
        }
        return $membres;
    }

    
?>