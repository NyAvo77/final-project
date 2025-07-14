<?php
    include("../inc/fonction.php");
    session_start();
    $id=$_SESSION['id'];
    $id_objt=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendre</title>
</head>
<body>
    <form action="traitement_rendre.php" method="post">
        <input type="hidden" name="id_objet" value="<?php echo $id_objt; ?>">
        <input type="hidden" name="id_membre" value="<?php echo $id; ?>">
        <label for="choix">montrer l etat de l' objet</label>
        <select name="etat" id="etat">
            <option value="abime">Abimé</option>
            <option value="bon">bon état</option>
        </select>
        <button type="submit">Oui</button>
    </form>
</body>
</html>