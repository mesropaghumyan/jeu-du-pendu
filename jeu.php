<?php
require_once('header.php');
require_once('partie.php');
?>

<h3>Jeu</h3>
<form action="jeu.php" method="post">
    <label>Proposer une lettre</label>
    <input type="text" name="lettre">
    <input type="submit" name="submitLettre" value="Valider">
</form>

<?php

if(isset($_POST['submitLettre'])) {
    $cmpt = 0;
    if(!empty($_POST['lettre'])) {
        $_SESSION['lettre'] = $_POST['lettre'];

        for($i=0; $i<strlen($_SESSION['mot']); $i++) {
            if($_SESSION['mot'][$i] == $_SESSION['lettre']) {
                $_SESSION['motStep'] = substr_replace($_SESSION['motStep'], $_SESSION['lettre'], $i, 1);
                $cmpt++;
            }
        }
        echo $_SESSION['motStep'] . '<br>';
        if($_SESSION['nb_coup'] > $_SESSION['nb_essai']) {
            if($cmpt == 0) {
                $_SESSION['erreurs'][] = $_SESSION['lettre'];
                echo 'Lettre(s) incorrecte(s) : ';
                foreach($_SESSION['erreurs'] as $erreur) {
                    echo $erreur;
                }
                $_SESSION['nb_essai']++;
            }
            else {
                echo 'Lettre(s) incorrecte(s) : ';
                foreach($_SESSION['erreurs'] as $erreur) {
                    echo $erreur;
                }
                $_SESSION['nb_essai']++;
            }
        }
        else {
            header('Location: final.php');
        }
    }
    $cmpt = 0;
    if($_SESSION['motStep'] == $_SESSION['mot']) {
        header('Location: final.php');
    }
}

require_once('footer.php');