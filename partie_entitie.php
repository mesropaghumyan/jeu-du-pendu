<?php

class Partie {
    private $nom_joueur1;
    private $nom_joueur2;
    private $mot;
    private $victoire;
    private $nb_coup;

    public function __construct($nom_joueur1, $nom_joueur2, $mot, $victoire, $nb_coup) {
        $this->nom_joueur1 = $nom_joueur1;
        $this->nom_joueur2 = $nom_joueur2;
        $this->mot = $mot;
        $this->victoire = $victoire;
        $this->nb_coup = $nb_coup;
    }

    public function getNom_joueur1() {
        return $this->nom_joueur1;
    }

    public function getNom_joueur2() {
        return $this->nom_joueur2;
    }

    public function getMot() {
        return $this->mot;
    }

    public function getVictoire() {
        return $this->victoire;
    }

    public function getNb_cout() {
        return $this->nb_coup;
    }

    function addPartie() {
        $bdd = connectDb();
        $req = $bdd->prepare('INSERT INTO partie(nom_joueur1, nom_joueur2, mot, victoire, nb_coup) VALUES(:nom_joueur1, :nom_joueur2, :mot, :victoire, :nb_coup)');
        $req->execute(array(
            'nom_joueur1' => $this->nom_joueur1,
            'nom_joueur2' => $this->nom_joueur2,
            'mot' => $this->mot,
            'victoire' => $this->victoire,
            'nb_coup' => $this->nb_coup
        ));
    }
}