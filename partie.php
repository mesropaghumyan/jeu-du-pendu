<?php require_once 'partie_entitie.php'; ?>

<table>
    <tr>
        <th>Joueur 1</th>
        <th>Joueur 2</th>
        <th>Mot</th>
        <th>Victoire</th>
        <th>Nombre de coups</th>
    </tr>
    <?php
    $parties = getParties();

    foreach ($parties as $partie) {
        echo '<tr>';
        echo '<td>' . $partie->getNom_joueur1() . '</td>';
        echo '<td>' . $partie->getNom_joueur2() . '</td>';
        echo '<td>' . $partie->getMot() . '</td>';
        echo '<td>' . $partie->getVictoire() . '</td>';
        echo '<td>' . $partie->getNb_cout() . '</td>';
        echo '</tr>';
    }   
    ?>
</table>

<button><a href="joueur.php">Nouvelle partie</a></button>

<?php

function getParties() {
    $bdd = connectDb();
    $req = $bdd->prepare('SELECT * FROM partie');
    $req->execute();
    $parties = $req->fetchAll();
    $listeParties = array();
    foreach ($parties as $partie) {
        $listeParties[] = new Partie($partie['nom_joueur1'], $partie['nom_joueur2'], $partie['mot'], $partie['victoire'], $partie['nb_coup']);
    }
    return $listeParties;
}