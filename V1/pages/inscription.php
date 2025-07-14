<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form action="traitement_inscription.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="dtn">Date de naissance:</label>
        <input type="date" id="dtn" name="dtn" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="mdp">Mot de passe:</label>
        <input type="password" id="mdp" name="mdp" required>
        <br>
        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" required>
        <br>
        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required><
            <option value="#">Sexe</option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
    <p>Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</body>
</html>