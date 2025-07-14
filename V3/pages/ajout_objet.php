<?php
    session_start();
    include("../inc/fonction.php");
    $categories = get_categorie();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un objet</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title mb-0">Ajouter un objet</h2>
                    </div>
                    <div class="card-body">
                        <form action="traitement_ajout.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nom_objet" class="form-label">Nom de l'objet :</label>
                                <input type="text" class="form-control" id="nom_objet" name="nom_objet" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_categorie" class="form-label">Catégorie :</label>
                                <select class="form-select" id="id_categorie" name="id_categorie" required>
                                    <?php foreach($categories as $cat): ?>
                                        <option value="<?= $cat['id_categorie'] ?>"><?= htmlspecialchars($cat['nom_categorie']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Ajouter l'objet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>