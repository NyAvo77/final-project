<?php
    session_start();
    include("../inc/fonction.php");
    $categories = get_categorie();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un objet</title>
</head>
<body>
    <h2>Ajouter un objet</h2>
    <form action="traitement_ajout.php" method="post" enctype="multipart/form-data">
        <label>Nom de l'objet :</label>
        <input type="text" name="nom_objet" required><br><br>

        <label>Catégorie :</label>
        <select name="id_categorie" required>
            <?php foreach($categories as $cat): ?>
                <option value="<?= $cat['id_categorie'] ?>"><?= htmlspecialchars($cat['nom_categorie']) ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Image :</label>
        <input type="file" name="image_objet"><br><br>

        <input type="submit" value="Ajouter l'objet">
    </form>
</body>
</html>
