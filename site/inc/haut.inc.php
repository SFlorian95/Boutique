<!Doctype html>
<html>
    <head>
        <title>Mon Site</title>
        <link rel="stylesheet" href="site/inc/css/style.css">
    </head>
    <body>
        <header>
            <div class="conteneur">
                <div>
                    <a href="" title="Mon Site">MonSite.com</a>    
                </div>
                <nav>
                    <?php
                    if(internauteEstConnecteEtEstAdmin())
                    {
                        echo '<a href="site/admin/gestion_membre.php">Gestion des membres</a>';
                        echo '<a href="site/admin/gestion_commande.php">Gestion des commandes</a>';
                        echo '<a href="site/admin/gestion_boutique.php">Gestion de la boutique</a>';
                    }
                    if(internauteEstConnecte())
                    {
                        echo '<a href="profil.php">Voir votre profil</a>';
                        echo '<a href="boutique.php">Accès à la boutique</a>';
                        echo '<a href="panier.php">Voir votre panier</a>';
                        echo '<a href="connexion.php?action=deconnexion">Se déconnecter</a>';
                    }
                    else 
                    {
                        echo '<a href="inscription.php">Inscription</a>';
                        echo '<a href="connexion.php">Connexion</a>';
                        echo '<a href="boutique.php">Accès à la boutique</a>';
                        echo '<a href="panier.php">Voir votre panier</a>';
                    }
                    ?>
                </nav>
            </div>
        </header>
        <section>
            <div class="conteneur">
                     