<?php
    $db = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
    $rq = $db->query('SELECT * FROM spawn');
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <title>admin</title>
</head>
<body>
    <h1>Bienvenue sur la page admin</h1>
    <a class="button" href="deco.php">Deconnexion</a>
    <a class="add" href="new_spawn.php" >Ajouter un nouveau spawn</a>

    <?php
    while($donnees = $rq->fetch()) {
    echo '<p>' . $donnees['nom'] . '</p>';
    echo '<p><a href="delete.php?id=' . $donnees['id'] . '">Supprimer</a></p>';
    echo '<p><a href="update?id=' . $donnees['id'] . '">Modifier</a></p>';
    }

    
    ?>
    
    
</body>
</html>