<?php
    session_start();
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username = $_POST['username'];
        $mdp = $_POST['password'];
        if(isset($mdp) && !empty($mdp)){
            $db = new PDO('mysql:host=localhost;dbname=tp-spawn;charset=utf8','root','');
            $requete = $db->prepare('SELECT login, mot_de_passe FROM user WHERE login=?');
            $requete->execute([$username]);
            $data = $requete->fetch();
            if($username == $data['login'] && $mdp == $data['mot_de_passe']){
                header('location:admin.php');
                $_SESSION['is_connected'] = true;
            }else{
                
            }
        }else{

        }
            


    } else {

    }
        


