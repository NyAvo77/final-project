<?php
    include('../inc/fonction.php');
    $membres = get_membre();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des membres</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Liste des membres</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Genre</th>
                    <th>Email</th>
                    <th>Ville</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($membres as $membre): ?>
                <tr>
                    <td><?= htmlspecialchars($membre['id_membre']) ?></td>
                    <td><?= htmlspecialchars($membre['nom']) ?></td>
                    <td><?= htmlspecialchars($membre['dtn']) ?></td>
                    <td><?= htmlspecialchars($membre['genre']) ?></td>
                    <td><?= htmlspecialchars($membre['ville']) ?></td>
                    <td><a href="fiche_membre.php?id=<?= htmlspecialchars($membre['id_membre']) ?>">Voir la fiche</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Retour à l'accueil</a>
    </div>
</body>
</html>