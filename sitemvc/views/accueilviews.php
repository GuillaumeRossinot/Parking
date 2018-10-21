<?php

    if(isset ($_SESSION ['connecte']) && $_SESSION ['connecte'])
        {
            //print_r($_SESSION);
            $nom = $_SESSION['nom'];
            $prenom = $_SESSION['prenom'];
            
            echo "<h1> Accueil </h1> <br>";
            echo "Bienvenue ", $nom," ", $prenom ," !<br>";
            echo "Pour reserver une place rendez vous <a href='?p=reservation'>içi</a>.<br>";
            echo "Pour voir votre place dans la file d'attente rendez vous <a href='?p=attente'>içi</a>.<br>";
        }
        else // sinon il affiche :
        {
            echo"<h1> Accueil </h1> 
                Bienvenue sur le site de gestion du parking de l'entreprise.<br>
                Veuillez vous inscrire et attendre que l'administrateur valide votre compte afin de pouvoir reserver une place.<br>";
        }
