<?php
    $id = intval($_GET['id']);

    $db = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
    $rq = $db->prepare('DELETE FROM spawn WHERE id=?');
    $rq->execute([$id]);

    header('location: admin.php');