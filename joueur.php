<?php
require_once('header.php');
require_once('partie.php');
?>

<h3>Joueurs</h3>
<form action="joueur.php" method="post">
    <label>Nom du joueur 1</label>
    <input type="text" name="nom_joueur1">
    <label>Nom du joueur 2</label>
    <input type="text" name="nom_joueur2">
    <input type="submit" name="submitJoueur" value="Valider">
</form>

<?php
if(isset($_POST['submitJoueur'])) {
    if(!empty($_POST['nom_joueur1']) && !empty($_POST['nom_joueur2'])) {
        $_SESSION['nom_joueur1'] = $_POST['nom_joueur1'];
        $_SESSION['nom_joueur2'] = $_POST['nom_joueur2'];
        require_once('def_mot.php');
    }
    else {
        echo 'Veuillez remplir tous les champs';
    }
}

require_once('footer.php');
?>