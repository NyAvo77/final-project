<?php
    include("../inc/fonction.php");
    session_start();
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprunt</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">EmpruntApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="liste_objet.php">Objets</a></li>
                    <li class="nav-item"><a class="nav-link" href="membre.php">Membres</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4>Emprunter un objet</h4>
                    </div>
                    <div class="card-body">
                        <form action="traitement_emprunt.php?id=<?php echo $id;?>" method="POST">
                            <div class="mb-3">
                                <label for="nbjours" class="form-label">Nombre de jours</label>
                                <input type="number" name="nbjours" id="nbjours" class="form-control" placeholder="Nombre de jours" required>
                            </div>
                            <button type="submit" class="btn btn-success">Emprunter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>