|fonctionnalités|points d'entrée actuels|le code responsable de l'affichage|le code réalisant des traitements|le code d'accès de données|les éléments communs aux différentes pages|les dépendances entre les fichiers|
|--------------|------------------------|----------------------------------|---------------------------------|--------------------------|------------------------------------------|----------------------------------|
|Regarder le nom des salles|bouton salle|script.php|Classes.php|ClassesRepository|lien hypertexte|les Classes.php ont besoins de leurs ClassesRepository pour s'afficher|


| Élément existant | Responsabilité | Destination WebArt |
| ---------------- | -------------- | ------------------ |
|data/data.sql|Accès aux données|data/|
|data/schema.sql|Accès aux données|data/|
|public/index.html|Routage|www/|
|public/enregister-reservation.php|Affichage|page/|
|public/nouvelle-reservation.php|Affichage|page/|
|public/recherche.php|Affichage|page/|
|public/salles.php|Affichage|page/|
|public/supprimes-reservation.php|Affichage|page/|
|y'en a pas|Code HTML commun|page/template/|
|src/Model/Ligue.php|Traitement|controle/|
|src/Model/Reservation.php|Traitement|controle/|
|src/Model/Salle.php|Traitement|controle/|
|src/Repository/Database.php|Traitement|controle/|
|src/Repository/LigueRepository.php|Traitement|controle/|
|src/Repository/ReservationRepository.php|Traitement|controle/|
|src/Repository/SalleRepository.php|Traitement|controle/|
|config/database.php|Configuration|config/|