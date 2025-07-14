<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Formulaire d'inscription</h4>
                    </div>
                    <div class="card-body">
                        <form action="traitement_inscription.php" method="post">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom :</label>
                                <input type="text" id="nom" name="nom" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="dtn" class="form-label">Date de naissance :</label>
                                <input type="date" id="dtn" name="dtn" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="email" id="email" name="email" class="form-control" required>   
                            </div>

                            <div class="mb-3">
                                <label for="mdp" class="form-label">Mot de passe :</label>
                                <input type="password" id="mdp" name="mdp" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville :</label>
                                <input type="text" id="ville" name="ville" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre :</label>
                                <select id="genre" name="genre" class="form-select" required>
                                    <option value="">Sexe</option>
                                    <option value="M">Masculin</option>
                                    <option value="F">Féminin</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p class="mb-0">Déjà inscrit ? <a href="login.php">Connectez-vous ici</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
