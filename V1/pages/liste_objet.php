<?php
    require("../inc/fonction.php");
    $objets = get_objet();
    $categories = get_categorie();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav>
        <button><a href="ajout_objet.php">ajouter un objet</a></button>
    </nav>

    <main>

    <h1>Liste des objets</h1>
    <h2>Filtre </h2>
    <form action="liste_objet_filtred.php" method="get">
        <select name="categorie" id="categorie">
            <option value="0">Tous</option>
            <?php foreach ($categories as $categorie): ?>
                <option value="<?php echo $categorie['id_categorie']; ?>"><?php echo $categorie['nom_categorie']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Filtrer">
    </form>
    </select>
    

    <h2>Liste des objets</h2>
    <table class="table striped_table">
        <thead>
            <tr>
                <th>Nom de l'objet</th>
                <th>Catégorie</th>
                <th>Membre</th>
                <th>Date de retour</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objets as $objet): ?>
                <tr>
                    <td><?php echo $objet['nom_objet']; ?></td>
                    <td><?php echo $objet['nom_categorie']; ?></td>
                    <td><?php echo $objet['nom']; ?></td>
                    <td><?php echo $objet['date_retour']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </main>

</body>
</html>