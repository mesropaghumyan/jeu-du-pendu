# Jeu du Pendu en PHP

Bienvenue dans le Jeu du Pendu en PHP, un jeu divertissant qui permet de tester ses compétences en devinant des mots. 

## Règles du jeu
- La partie se joue à 2 joueurs qui doivent entrer leur nom pour pouvoir jouer
- Le premier joueur choisit un mot ainsi que le nombre de coups
- Le deuxième joueur doit deviner le mot en faisant attention à ne pas épuiser le nombre de coups nécessaires pour trouver le mot
- Un tableau en début de page permet de voir la liste de toutes les parties avec le nom des joueurs, le mot, le gagnant ainsi que le nombre d'essais.

## Prérequis
- PHP version 5.6 ou supérieure

## Installation
1. Téléchargez le code source du jeu du pendu à partir de ce dépôt Github.
2. Décompressez le fichier téléchargé sur votre serveur local ou en ligne.
3. Importer le fichier .sql './bdd/pendu' dans votre table.
4. Accédez au répertoire du jeu du pendu à partir de votre navigateur web.
5. Commencez à jouer en entrant le nom des joueurs et en choisissant un mot.

## Comment jouer
1. Entrez le nom des joueurs.
2. Le premier joueur choisit un mot et le nombre de coups.
3. Le deuxième joueur doit deviner le mot en entrant des lettres une à une.
4. Si le deuxième joueur devine le mot correctement, il gagne la partie.
5. Si le deuxième joueur épuise le nombre de coups sans trouver le mot, il perd la partie.

## Historique des parties
Un tableau en début de page permet de voir la liste de toutes les parties avec les détails suivants:
- Nom des joueurs
- Mot
- Gagnant
- Nombre d'essais

## Contribuer
Ce projet a été développé par moi seul. Si vous souhaitez toutefois apporter des modifications, n'hésitez pas à soumettre une demande de tirage.