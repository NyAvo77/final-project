<?php
    include("../inc/fonction.php");
    $id = $_GET['id'];

    $fiche = get_fiche_membre($id);
    //var_dump($fiche);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche membre</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Fiche de fiche</h1>
        <?php if ($fiche): ?>
            <p><strong>ID:</strong> <?php echo htmlspecialchars($fiche[0]['id_membre']); ?></p>
            <p><strong>Nom:</strong> <?php echo htmlspecialchars($fiche[0]['nom']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($fiche[0]['email']); ?></p>
            <p><strong>Ville:</strong> <?php echo htmlspecialchars($fiche[0]['ville']); ?></p>
            <p><strong>Date de naissance:</strong> <?php echo htmlspecialchars($fiche[0]['dtn']); ?></p>
            <p><strong>Genre:</strong> <?php echo htmlspecialchars($fiche[0]['genre']); ?></p>
        <?php else: ?>
            <p>Membre introuvable.</p>
        <?php endif; ?>
        <a href="membre.php" class="btn btn-secondary mt-3">Retour à la liste des membres</a>
    </div>