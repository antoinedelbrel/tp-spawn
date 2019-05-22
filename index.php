<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Spawn Fortnite</title>
</head>
<body>
    <h1>Spawn Fortnite</h1>
    <a class="connexion" href="connexion.php">Connexion</a>
    
    <a class="button" href="./?id=<?php echo(rand(1,3)) ?>">Nouveau spawn</a>
    <?php
    if (isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $database = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
        $rq = $database->prepare('SELECT nom,image FROM spawn WHERE id=?');
        $rq->execute([$id]);
    }else{

    }
    
    $spawn = $rq->fetch();
    
    ?>
    <div id="spawn">
        <p><?php echo($spawn['nom']); ?></p>
        <img class ="img" src="<?php echo($spawn['image']); ?>" alt="img">
    </div>
    
    
    
</body>
</html>