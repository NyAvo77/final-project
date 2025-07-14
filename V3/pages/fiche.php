<?php
    include('../inc/fonction.php');
    $id = $_GET['id'];
    $ob = get_fiche($id);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche objet</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php foreach($ob as $row) { ?>
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="card-title"><?php echo htmlspecialchars($row['nom_objet']); ?></h2>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Catégorie :</strong> <?php echo htmlspecialchars($row['nom_categorie']); ?></p>
                    <p class="card-text"><strong>Membre :</strong> <?php echo htmlspecialchars($row['nom']); ?></p>
                </div>
            </div>
        <?php } ?>
        <a href="liste_objet.php" class="btn btn-secondary">Retour à la liste</a>
    </div>
</body>