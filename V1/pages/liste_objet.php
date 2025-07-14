<?php
require("../inc/fonction.php");
$objets = get_objet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des objets</h1>
    <table>
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
</body>
</html>