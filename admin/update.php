<?php
$id = intval($_GET['id']);

$db = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
$req = $db->prepare('SELECT * FROM spawn WHERE id = ?');
$req->execute([$id]);
$donnees = $req->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>update</title>
</head>
<body>
    <form method="POST" action="edit_spawn.php">
    <input type="text" name="nom" value="<?= $donnees['nom'] ?>" />
    <input type="text" name="image" value="<?= $donnees['image'] ?>" />
    <input type="hidden" name="id" value="<?= $id ?>" />
    <button type="submit" value="Ajouter">Ajouter</button>
    </form>
</body>
</html>