Projet PHP Novacraft
🧩 Contexte

Ce projet consiste à migrer un site dynamique stateless vers une application PHP connectée à une base de données, sans utiliser de framework.
Objectifs principaux :

Centraliser les requêtes via un Front Controller

Implémenter un routing dynamique avec URLs propres

Ajouter un système d’authentification sécurisé

Gérer des données persistées utilisateur

Respecter les bonnes pratiques PHP

📂 Structure du projet
novacraft/
│
├─ public/                # Point d'entrée (Front Controller)
│  └─ index.php
│
├─ controllers/           # Contrôleurs PHP
├─ models/                # Requêtes SQL et logique métier
├─ views/                 # Templates HTML/PHP
├─ data/                  # Fichier de connexion DB et schema.sql
├─ .htaccess              # Configuration pour URLs propres
└─ README.md

⚙️ Technologies utilisées

PHP 8.x

MySQL / MariaDB

HTML, CSS

Mysqli pour toutes les requêtes SQL

Sessions PHP pour l’authentification

Password hashing (password_hash() / password_verify())

🏗️ Phases du projet

Architecture & Routing

Front Controller (public/index.php)

Routing PHP et URLs propres

Sécurisation des fichiers internes

Base de données

Base novacraft avec tables users et contacts

Fichier schema.sql fourni

Système d’authentification

Login / Logout

Gestion des sessions

Protection des pages privées

Sécurité

Hash des mots de passe

Requêtes préparées

Protection des données sensibles

Page Profil Utilisateur

Accès restreint

Affichage des informations utilisateur

Récupération via l’ID en session

Fonctionnalité "Contact Us"

Formulaire Nom, Email, Message

Validation serveur

Insertion en base et feedback utilisateur

Vues & Organisation MVC simplifié

Séparation contrôleurs, modèles et vues

Aucun SQL ni logique métier dans les vues

Gestion des erreurs

Messages clairs pour l’utilisateur

Journalisation minimale pour debug

Middleware maison

Vérification de la session pour routes protégées

Redirection si non connecté

Bonus admin & messages

Page admin listant les messages de contact

Pagination avec LIMIT / OFFSET

Flash messages via session

Finalisation & tests

Tests complets des fonctionnalités

Nettoyage et sécurisation finale du code

Préparation pour déploiement

🗄️ Base de données

Le fichier data/schema.sql contient :

Table users
Champ	Type	Description
id	INT PK AI	Identifiant utilisateur
name	VARCHAR	Nom
email	VARCHAR UNIQUE	Email
password	VARCHAR	Mot de passe hashé
created_at	DATETIME	Date de création
Table contacts
Champ	Type	Description
id	INT PK AI	Identifiant message
name	VARCHAR	Nom de l’expéditeur
email	VARCHAR	Email
message	TEXT	Message
created_at	DATETIME	Date d’envoi
🔐 Sécurité

Mots de passe hashés (password_hash())

Vérification des mots de passe (password_verify())

Requêtes préparées avec mysqli

Protection des pages privées via sessions

Aucune donnée sensible en clair dans la session

🚀 Instructions d’installation

Cloner le dépôt :

git clone <repo-url>


Importer schema.sql dans MySQL :

mysql -u root -p novacraft < data/schema.sql


Configurer la connexion dans data/connect_db.php

Placer le projet dans votre serveur local (ex: htdocs ou www)

Accéder à http://localhost/novacraft/public/

🏆 Bonus possibles

Middleware pour routes protégées

Page admin pour les messages de contact

Flash messages via sessions

Pagination simple pour les listes