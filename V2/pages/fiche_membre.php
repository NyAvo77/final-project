<?php
    include("../inc/fonction.php");
    $id=$_GET['id'] ;

    $membre=get_fiche_membre($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche</title>
</head>
<body>
    <div class="container">
        <h1>Fiche de membre</h1>
        <p>ID: <?php echo $membre['id_membre']; ?></p>
        <p>Nom: <?php echo $membre['nom']; ?></p>
        <p>Email: <?php echo $membre['email']; ?></p>
        <p>Date d'inscription: <?php echo $membre['date_inscription']; ?></p>
    </div>
</body>
</html>