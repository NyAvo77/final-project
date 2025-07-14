<?php 
    require("../inc/fonction.php");
    $objet = get_objet_filtred($_GET['categorie']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des objets filtrés</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-4">
        <h1 class="mb-4 text-center">Objets filtrés</h1>

        <div class="row">
            <?php foreach ($objet as $obj): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $obj['nom_objet']; ?></h5>
                            <p class="card-text mb-1"><strong>Catégorie :</strong> <?php echo $obj['nom_categorie']; ?></p>
                            <p class="card-text mb-1"><strong>Membre :</strong> <?php echo $obj['nom']; ?></p>
                            <p class="card-text"><strong>Date de retour :</strong> <?php echo $obj['date_retour']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-4">
            <a href="liste_objet.php" class="btn btn-primary">Retour</a>
        </div>
    </div>
</body>
</html>
