<?php
require_once('header.php');
require_once('partie.php');
?>

<h3>Définir le mot</h3>
<form action="def_mot.php" method="post">
    <label>Choisissez un mot</label>
    <input type="text" name="mot">
    <label>Nombre de coups</label>
    <input type="number" name="nb_coup">
    <input type="submit" name="submitMot" value="Valider">
</form>

<?php

if(isset($_POST['submitMot'])) {
    if(!empty($_POST['mot']) && !empty($_POST['nb_coup'])) {
        $_SESSION['mot'] = $_POST['mot'];
        $_SESSION['erreurs'] = [];
        $_SESSION['motStep'] = str_pad($_SESSION['motStep'], strlen($_SESSION['mot']), '-');
        $_SESSION['nb_coup'] = $_POST['nb_coup'];
        $_SESSION['nb_essai'] = 0;
        header('Location: jeu.php');
    }
    else {
        echo 'Veuillez remplir tous les champs';
    }
}

require_once('footer.php');