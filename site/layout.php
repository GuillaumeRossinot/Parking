<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./CSS/style.css" media="all"/>
</head>

<header>
<title>Site parking</title>
 <!--Header-->
 			<!-- Banniere -->
   
 <!-- <img src="./Images/banniere.png" > -->

  <!-- Ecrire tout le header içi-->

          <ul id="menuheader">
            <li>
              <a class="nav-link" href="?p=accueil">Accueil</a>
            </li>
				<?php 
				if(isset ($_SESSION ['connecte']))
				{
				//print_r($_SESSION['lvl']);
				$requete = $bdd->query("SELECT lvl FROM user ");
				$reponse = 	$requete->fetch();{
				$lvl = $reponse['lvl'];
				//print_r($lvl);
				?>
				<!-- si l'utilisateur est connecter affiche les pages -->
            <li>
              <a class="nav-link disabled" href="?p=reservation">Reservation</a>
            </li>
            <li>
              <a class="nav-link disabled" href="?p=attente">Attente</a>
            </li>
				<?php
				}
				?>
             <li>
              <a class="nav-link disabled" href="?p=modeemploi">Mode d'emploi</a>
            </li>
			<li>
              <a class="nav-link disabled" href="?p=quisommenous">Qui somme nous?</a>
            </li>
            <li>
              <a class="nav-link disabled" href="?p=contact">Contact</a>
            </li>
			<?php 
			if(isset ($_SESSION ['connecte']))// si connecter affiche deconnexion
				{
				//print_r($_SESSION);
			?>
			<li>
			  <a class="nav-link disabled" href="?p=logout">Deconnexion</a>
			</li>
			<?php
				}
				else //ou si pas connecter connexion / inscription
				{ 
			?>
            <li>
              <a class="nav-link disabled" href="?p=login">Connexion / </a> <a class="nav-link disabled" href="?p=register"> Inscription </a>
            </li>
			<?php
				}
				if($lvl = 3)// si connecter affiche deconnexion
				{
				//print_r($_SESSION);
			?>
			<li>
			  <a class="nav-link disabled" href="?p=admin">Administration</a>
			</li>
			<?php
				}
				
			}
			?>
          </ul>
 </header>
  

  <body>
   <!--ne pas modifier cette partie-->
  <?= $content; ?>
  </body>
 
<footer>
  			<!-- footer -->
<h3> footer </h3>
	<h4>Pages du site</h4>
	<ul class="basdepage">
        <li>
          <a class="nav-link" href="?p=accueil">Accueil</a>
        </li>
        <li>
         <a class="nav-link disabled" href="?p=modeemploi">Mode d'emploi</a>
        </li>
		<li>
         <a class="nav-link disabled" href="?p=quisommenous">Qui somme nous?</a>
        </li>
        <li>
          <a class="nav-link disabled" href="?p=contact">Contact</a>
        </li>
        <li>
          <a class="nav-link disabled" href="?p=login">Connection / </a> <a class="nav-link disabled" href="?p=register"> Inscription </a>
        </li>
    </ul>
	  <!-- Ecrire tout le footer içi-->
	  Copyrigth "Webmaster".
  </footer>
</html>