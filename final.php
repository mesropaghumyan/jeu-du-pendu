<?php
require_once('header.php');
require_once('partie.php');

if($_SESSION['nb_essai'] == $_SESSION['nb_coup']) {
    echo 'Le joueur 1 a gagné !';
    $partie = new Partie($_SESSION['nom_joueur1'], $_SESSION['nom_joueur2'], $_SESSION['mot'], 1, $_SESSION['nb_essai']);
    $partie->addPartie();
    session_destroy();
}
else {
    echo 'Le joueur 2 a gagné !';
    $partie = new Partie($_SESSION['nom_joueur1'], $_SESSION['nom_joueur2'], $_SESSION['mot'], 2, $_SESSION['nb_essai']);
    $partie->addPartie();
    session_destroy();
}

echo '<br><button><a href="index.php">Nouvelle partie</a></button>';

require_once('footer.php');