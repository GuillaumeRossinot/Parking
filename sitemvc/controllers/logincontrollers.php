<?php
require dirname(__FILE__).'/../model/loginmodel.php';


    if(isset($_SESSION['connecte']))
    {
        $_SESSION['id_u'] = $reponse["id_u"];
        $_SESSION['email'] = $reponse["email"];
        $_SESSION['lvl'] = $reponse['lvl'];
        $_SESSION['nom'] = $reponse['nom'];
        $_SESSION['prenom'] = $reponse['prenom'];
        //print_r ($_SESSION);
    }
    else
    {
        $credentials = getUserIFExists();
        if(sizeof($credentials) > 0){
            $_SESSION['id_u'] = $credentials["id_u"];
            $_SESSION['email'] = $credentials["email"];
            $_SESSION['lvl'] = $credentials['lvl'];
            $_SESSION['nom'] = $credentials['nom'];
            $_SESSION['prenom'] = $credentials['prenom'];
        }
    }
 