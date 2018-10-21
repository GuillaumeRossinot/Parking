<?php
require dirname(__FILE__).'/../model/reservationmodel.php';

  $reponse = reserver();
  $reserver = $reponse['placefileattente'];
  if($reponse['placefileattente'] == 0){
      if(isset($_POST['oui'])) // si l'utilisateur coche oui, ajoute l'utilisateur a la derniere place
      {
        $requete = $bdd->query("SELECT MAX(placefileattente) FROM user"); // recherche dans la bdd le place du dernier utilisateur en liste d'attente
        $attente = $requete->fetch();
        $attente = $attente['MAX(placefileattente)'];
        //print_r($attente);
        $attente = $attente +1; // ajoute +1 a la derniere place
        //print_r($attente);
        $requete = $bdd->query("UPDATE user SET placefileattente = '$attente' WHERE id_u ='$id_u'"); // ajoute l'utilisateur a la derniere place
        //print_r($requete);
        $attente = $requete->fetch();
        $URL="?p=attente";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">'; // redirige vers la page attente


      }
       elseif(isset($_POST['non']))
       {
         $URL="?p=accueil";
         echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">'; // redirige vers la page accueil
       }
}
