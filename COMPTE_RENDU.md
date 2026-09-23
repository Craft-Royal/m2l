# Compte rendu — PHP Crime Scene

# Ticket 3 — Consultation des salles

## 1. Incident reproduit

### Manipulation réalisée

Ouverture de la page sur le site.

### Résultat observé

Rien ne s'affiche à part un point et le titre.

### Résultat attendu

Un tableau avec le nom des salles et la capacité de chacune.

## 2. Diagnostic

### Parcours des données
parcours de la classe salle et du script php salle et du Repo salle

### Hypothèse
Certaines variables devait être mal rédigé dans le code

### Vérification avec le débogueur
Pas fait

### Cause identifiée
Variables mal nommé ou mal inséré dans le code 

## 3. Correction

### Fichiers modifiés

Salle.php où le getNom et le getCapacite était mal rédigé
salles.php où l'appel des paramètre n'était pas bon
SallesRepository où les paramètres n'étaient pas bien définit

### Explication

Les noms n'étaient pas conforme et donc les noms de variable ne correspondaient pas 
Ce qui était appelé n'était pas les paramètres mais des éléments d'un tableau associatif
Le nom des paramètres était inversé

## 4. Tests

| Test | Résultat attendu | Résultat obtenu |
|------|------------------|-----------------|
| Ouverture de la page Salles | Aucun message d’erreur | |
| Affichage des noms | Noms conformes à la BDD | |
| Affichage des capacités | Capacités conformes à la BDD | |
| Vérification syntaxique | Aucune erreur PHP | |
| Test des autres pages | Pas de régression visible | |




## Bugs corrigés

| N° | Problème constaté | Correction apportée | Commit |
|---|---|---|---|
| 1 | On ne peut pas accèder aux salles | Les salles sont maintenant visible | |
| 2 | La page Nouvelle réservation ne s'ouvre pas | | |
| 3 | Annuler réservation ne s'ouvre pas | | |
| 4 | | | |
| 5 | | | |
| 6 | | | |
| 7 | | | |
| 8 | | | |
| 9 | | | |
| 10 | | | |

## Ce que j'avais oublié

...

## Ce qui m'a posé le plus de difficulté

...

## Ce que je dois revoir

...
