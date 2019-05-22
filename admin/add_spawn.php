<?php
if (isset($_POST['name']) && isset($_POST['image']) && !empty($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $image = $_POST['image'];

    $db = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
    $req = $db->prepare('INSERT INTO spawn(nom,image) VALUES(?, ?)');
    $req->execute([$name, $image]);

    header('Location: admin.php');
}
?>