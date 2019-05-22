<?php

$id = intval($_POST['id']);
$nom = $_POST['nom'];
$image = $_POST['image'];

$db = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
$req = $db->prepare('UPDATE spawn SET nom = ?, image = ? WHERE id = ?');
$req->execute([$nom, $image, $id]);

header('Location: admin.php');