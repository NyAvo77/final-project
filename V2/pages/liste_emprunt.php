<?php
include("../inc/fonction.php");
    session_start();
    $user=$_SESSION["id"];
    $liste_emp=get_emprunt($user);
    $nom=get_user_name("$user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $nom ?></h1>
        <?php foreach($liste_emp as $row) { ?>
            <p><?php echo $row['id_emprunt']; ?> : <?php echo $row['nom_objet']; ?>  <a href="rendre.php?id=<?php echo $row['id_objet'];?>" class="btn btn-success">rendre</a></p>
        <?php } ?>
    </div>
</body>
</html>