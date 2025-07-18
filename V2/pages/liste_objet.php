<?php
    require("../inc/fonction.php");
    $objets = get_objet();
    $categories = get_categorie();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des objets</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MonSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <div class="d_flex">
                <a href="membre.php" class="btn btn-success me-2">Membre</a>
            </div>
            
            <div class="d-flex">
                <a href="ajout_objet.php" class="btn btn-success me-2">Ajouter un objet</a>
            </div>

            <div class="d_flex">
                <a href="liste_emprunt.php" class="btn btn-success me-2">voir mes objets empruntes</a>
            </div>

            <div class="d-flex">
                <a href="deco.php" class="btn btn-danger me-2">Déconnexion</a>
            </div>


    </nav>

    <div class="container py-4">
        <h1 class="mb-4 text-center">Liste des objets</h1>

        <div class="mb-4">
            <h4>Filtrer par catégorie</h4>
            <form action="liste_objet_filtred.php" method="get" class="row g-3 align-items-end">
                <div class="col-sm-6">
                    <label for="categorie" class="form-label">Catégorie :</label>
                    <select name="categorie" id="categorie" class="form-select">
                        <option value="0">Tous</option>
                        <?php foreach ($categories as $categorie): ?>
                            <option value="<?php echo $categorie['id_categorie']; ?>">
                                <?php echo $categorie['nom_categorie']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                </div>
            </form>
        </div>

        <div class="row">
            <?php foreach ($objets as $objet): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $objet['nom_objet']; ?></h5>
                            <p class="card-text mb-1"><strong>Catégorie :</strong> <?php echo $objet['nom_categorie']; ?></p>
                            <p class="card-text mb-1"><strong>Membre :</strong> <?php echo $objet['nom']; ?></p>
                            <?php if ($objet['date_retour'] > date('Y-m-d')){ ?>
                                <p class="card-text"><strong>Disponible le :</strong> <?php echo $objet['date_retour']; ?></p>
                            <?php } else { ?>
                                <a href="emprunt.php?id=<?php echo $objet['id_objet'] ?>"><button class="btn btn-secondary">emprunter</button></a>
                            <?php } ?>
                            <a href="fiche.php?id=<?php echo $objet['id_objet'] ?>"><button class="btn btn-secondary">fiche</button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
