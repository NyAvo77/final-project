<?php 
    require("../inc/fonction.php");
    $objet = get_objet_filtred($_GET['categorie']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste objet</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
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
            <?php foreach ($objet as $objet): ?>
                <tr>
                    <td><?php echo $objet['nom_objet']; ?></td>
                    <td><?php echo $objet['nom_categorie']; ?></td>
                    <td><?php echo $objet['nom']; ?></td>
                    <td><?php echo $objet['date_retour']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="liste_objet.php"><button class="btn btn-secondary">Retour</button></a>
</body>
</html>