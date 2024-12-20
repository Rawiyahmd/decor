# Décor
Ceci est un projet de site e-commerce développé localement avec XAMPP. Suivez les instructions ci-dessous pour configurer et exécuter ce projet sur votre machine locale.

## Pré-requis
XAMPP installé sur votre système.
Git installé sur votre système.
Installation
Clonez le dépôt :

bash
Copy code
git clone https://github.com/Rawiyahmd/decor/
Déplacez le dossier du projet dans le répertoire htdocs de XAMPP :

bash
Copy code
mv decor /chemin-vers-xampp/htdocs/
Importez la base de données :

Ouvrez phpMyAdmin.
Créez une nouvelle base de données :decor_db
Importez le fichier decor_db.sql situé dans le dossier database.
Mettez à jour la configuration :

Ouvrez le fichier wp-config.php dans le répertoire du projet.
Mettez à jour les informations d'identification de la base de données :
php
Copy code
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Nom d'utilisateur par défaut de XAMPP
define('DB_PASSWORD', ''); // Mot de passe par défaut de XAMPP (laissez vide)
define('DB_NAME', 'decor_db');
Démarrez XAMPP :

Lancez les services Apache et MySQL.
Accédez au site web :

Ouvrez votre navigateur et naviguez vers http://localhost/decor.
Identifiants
Utilisez les identifiants suivants pour vous connecter à l’administration ou pour tester un compte utilisateur :

Compte Administrateur :
Nom d’utilisateur : eCommerce Website
Mot de passe : eCommerce Website
Identifiants de la Base de Données :
Utilisateur : root
Mot de passe : (vide)
