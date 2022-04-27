# Base de données

## Install

- Créer une BDD "cours" sur le serveur "localhost".
- Créer un utilisateur "eleve" avec le mot de passe "passwd" ayant accès total à cette BDD.
- Importer le fichier "schema.sql" pour créer la table contenant les cours.
- [Optionnel] Importer le fichier "seed.sql" pour avoir des données de démo.

## Colonnes

- **id** : *INT(11), autoincrement* <br>
  Identifiant du cours
- **name** : *VARCHAR(65)*
  Nom du cours

- **desc** : Description
- **url** : URL de la vidéo Youtube
- **date** : Date de la séance
- **duration** : Durée de la vidéo
- **teacher** : Professeur