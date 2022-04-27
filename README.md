# Base de données

## Install

- Créer une BDD "cours" sur le serveur "localhost".
- Créer un utilisateur "cours" avec le mot de passe "passwd".
- Attribuer les droits à l'utilisateur sur la DBB.
- Importer le fichier "_ressources/schema.sql" pour créer la table contenant les cours.
- [Optionnel] Importer le fichier "_ressources/seed.sql" pour avoir des données de démo.

## Schema

- **id** : *INT(11), autoincrement, primary key* <br>
  Identifiant du cours
- **name** : *VARCHAR(65), required, unique* <br>
  Nom du cours
- **description** : *TEXT* <br>
  Description du cours
- **url** : *VARCHAR(255), required, unique* <br>
  URL de la vidéo Youtube
- **date** : *DATE(YYYY-MM-DD), required, unique* <br>
  Date du cours
- **duration** : *INT(11), required* <br>
  Durée du cours (en secondes)
- **teacher** : *VARCHAR(65), required* <br>
  Nom du professeur