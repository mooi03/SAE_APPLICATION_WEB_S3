# Compte Rendu : Mise en Place de l'Application sur Raspberry Pi

## Introduction

L'objectif de ce compte rendu est de détailler le processus de mise en place et de portage de l'application de ticketing
informatique sur un Raspberry Pi. Les outils utilisés comprennent Raspberry Pi Imager pour l'installation du système
d'exploitation.

## Étapes de Mise en Place
### Installation du Système d'Exploitation :

Utilisation de Raspberry Pi Imager pour flasher une carte SD avec le système d'exploitation Debian sans interface graphique, 
optimisé pour le Raspberry Pi.

### Installation d'Apache :

Installation du serveur web Apache via la commande sudo apt install apache2.
Vérification du bon fonctionnement en accédant à l'adresse IP du Raspberry Pi depuis un navigateur web.

### Installation de MariaDB :

Installation du système de gestion de base de données MariaDB via la commande sudo apt install mariadb-server.
Création d'un nouvelle utilisateur root pour avoir le bon mot de passe.

### Configuration de la Base de Données :

Importation de la base de données dédiée pour l'application de ticketing deja fait en local.

### Déploiement de l'Application :

Transfert des fichiers de l'application sur le Raspberry Pi, dans /var/www/html/.

### Sécurité avec Fail2Ban :

Installation de Fail2Ban pour protéger le serveur contre les attaques de force brute.
Configuration de Fail2Ban pour surveiller les journaux d'Apache et appliquer des mesures de sécurité en cas de comportement suspect.

## Conclusion

Ce portage permet d'utiliser le Raspberry Pi comme un serveur local efficace pour l'application de ticketing, pour que 
tout le mode puisse l'utiliser en ce connectant au raspberry.

