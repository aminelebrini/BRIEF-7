# Projet PHP Novacraft

## 🧩 Contexte

Ce projet consiste à migrer un site dynamique stateless vers une application PHP connectée à une base de données, sans framework.  

**Objectifs principaux :**  
- Centraliser les requêtes via un Front Controller  
- Implémenter un routing dynamique avec URLs propres  
- Ajouter un système d’authentification sécurisé  
- Gérer des données persistées utilisateur  
- Respecter les bonnes pratiques PHP  

---

## 📂 Structure du projet

BRIEF-7/
│
├─ public/                  # Point d'entrée (Front Controller)
│  ├─ styles/
│  │   └─ style.css
│  ├─ scripts/
│  │   └─ script.js
│  └─ index.php
│
├─ controllers/             # Contrôleurs PHP
├─ views/                   # Templates HTML/PHP
├─ data/                    # Fichier de connexion DB et schema.sql
├─ .htaccess                # Configuration pour URLs propres
└─ README.md




---

## ⚙️ Technologies utilisées

- PHP 8.x  
- MySQL 
- HTML, CSS / Tailwind
- Mysqli pour toutes les requêtes SQL  
- Sessions PHP pour l’authentification  
- Password hashing (`password_hash()` / `password_verify()`)

---

## 🏗️ Phases du projet

1. **Architecture & Routing**  
   - Front Controller (`public/index.php`)  
   - Routing PHP et URLs propres  
   - Sécurisation des fichiers internes  

2. **Base de données**  
   - Base `novacraft` avec tables `users` et `contacts`  
   - Fichier `schema.sql` fourni  

3. **Système d’authentification**  
   - Login / Logout  
   - Gestion des sessions  
   - Protection des pages privées  

4. **Sécurité**  
   - Hash des mots de passe  
   - Requêtes préparées  
   - Protection des données sensibles  

5. **Page Profil Utilisateur**  
   - Accès restreint  
   - Affichage des informations utilisateur via ID en session  

6. **Fonctionnalité "Contact Us"**  
   - Formulaire Nom, Email, Message  
   - Validation serveur  
   - Insertion en base et feedback utilisateur  

7. **Vues & Organisation MVC simplifié**  
   - Séparation contrôleurs, modèles et vues  
   - Aucun SQL ni logique métier dans les vues  

8. **Gestion des erreurs**  
   - Messages clairs pour l’utilisateur  
   - Journalisation minimale pour debug  

9. **Middleware maison**  
   - Vérification de la session pour routes protégées  
   - Redirection si non connecté  

10. **Bonus admin & messages**  
    - Page admin listant les messages de contact  
    - Pagination avec LIMIT / OFFSET  
    - Flash messages via session  

11. **Finalisation & tests**  
    - Tests complets des fonctionnalités  
    - Nettoyage et sécurisation finale du code  
    - Préparation pour déploiement  

---

## 🗄️ Base de données

Le fichier `data/schema.sql` contient :  

**Table `users`**  

| Champ      | Type         | Description            |
|------------|-------------|-----------------------|
| id         | INT PK AI   | Identifiant utilisateur |
| name       | VARCHAR     | Nom                     |
| email      | VARCHAR UNIQUE | Email                |
| password   | VARCHAR     | Mot de passe hashé      |
| created_at | DATETIME    | Date de création        |

**Table `contacts`**  

| Champ      | Type     | Description          |
|------------|----------|---------------------|
| id         | INT PK AI | Identifiant message |
| name       | VARCHAR  | Nom de l’expéditeur  |
| email      | VARCHAR  | Email               |
| message    | TEXT     | Message             |

---

## 🔐 Sécurité

- Mots de passe hashés (`password_hash()`)  
- Vérification des mots de passe (`password_verify()`)  
- Requêtes préparées avec `mysqli`  
- Protection des pages privées via sessions  
- Aucune donnée sensible en clair dans la session  

---

## 🚀 Instructions d’installation

1. Cloner le dépôt :

```bash
git clone <repo-url>

mysql -u root -p novacraft < data/schema.sql

