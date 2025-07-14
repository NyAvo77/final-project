<?php
    include('../inc/fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Fiche membre</h2>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $membre = get_fiche_membre($id);
            if ($membre) {
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td><?= htmlspecialchars($membre['id_membre']) ?></td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td><?= htmlspecialchars($membre['nom']) ?></td>
                    </tr>
                    <tr>
                        <th>Date de naissance</th>
                        <td><?= htmlspecialchars($membre['dtn']) ?></td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td><?= htmlspecialchars($membre['genre']) ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= htmlspecialchars($membre['email']) ?></td>
                    </tr>
                    <tr>
                        <th>Ville</th>
                        <td><?= htmlspecialchars($membre['ville']) ?></td>
                    </tr>
                </table>
                <?php
            }
        }
        ?>
        <a href="membre.php" class="btn btn-secondary">Retour à la liste des membres</a>
    </div>
</body>
</html>