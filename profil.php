<?php
require_once("site/inc/init.inc.php");

//--------------------------------- TRAITEMENTS PHP ---------------------------------//

if(!internauteEstConnecte())
{ 
    header ("location:connexion.php");   
}
// debug($_SESSION);
$contenu .= '<p class="centre"> Bonjour <strong>' . $_SESSION['membre']['pseudo'] . '</strong> </p>';
$contenu .= '<div class=""cadre><h2> Voici les infos du Profil</h2>';
$contenu .= '<p> votre email est: ' . $_SESSION['membre']['email'] . '<br>';
$contenu .= 'votre ville est: ' . $_SESSION['membre']['ville'] . '<br>';
$contenu .= 'votre cp est: ' . $_SESSION['membre']['code_postal'] . '<br>';
$contenu .= 'votre adresse est: ' . $_SESSION['membre']['adresse'] . '</p></div><br><br>';
//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("site/inc/haut.inc.php");
echo $contenu;
require_once("site/inc/bas.inc.php");