<?php

require ("model.php");

function Reserver()
  {
    global $bdd;
    $id_u = $_SESSION['id_u'];
    	//print_r($id_u);
      	$requete = $bdd->query("SELECT placefileattente FROM user WHERE id_u = '$id_u'");
    		//print_r ($requete);
    		$reponse = $requete->fetch();
    		//print_r($reponse);
        return $reponse;    
  }
