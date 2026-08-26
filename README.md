# m2lBugs — PHP Crime Scene

Application volontairement boguée destinée à une remise en route PHP / POO / PDO / SQL / formulaires.

## Contexte

La Maison des Ligues (M2L) met des salles à disposition des associations sportives.
L'application permet normalement :

- de consulter les salles ;
- de consulter les réservations ;
- d'ajouter une réservation ;
- d'annuler une réservation ;
- de rechercher les réservations d'une ligue.

Mais l'application a été "malmenée" et contient de nombreux dysfonctionnements.

## Objectif étudiant

Votre mission est de remettre l'application en état.

Travaillez par petits commits Git et documentez vos corrections.

Exemples de commits :

```text
fix: correction affichage des salles
fix: correction ajout réservation
fix: correction recherche par ligue
```

## Prérequis

- PHP 8.x
- MySQL ou MariaDB
- extension PDO MySQL activée
- PhpStorm
- DBeaver

## Installation

1. Créer une base `m2l`.
2. Exécuter `sql/schema.sql`.
3. Exécuter `sql/data.sql`.
4. Modifier les paramètres dans `config/database.php`.
5. Lancer le serveur PHP depuis la racine :

```bash
php -S localhost:8000 -t public
```

6. Ouvrir :

```text
http://localhost:8000
```

## Règles du challenge

- Ne modifiez pas la structure de la base sauf si un ticket le demande.
- Ne réécrivez pas toute l'application.
- Corrigez les problèmes un par un.
- Faites un commit Git par correction logique.
- Aucun framework n'est autorisé.

## Livrable

- dépôt Git ;
- application fonctionnelle ;
- fichier `COMPTE_RENDU.md` complété.
