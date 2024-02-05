# I./Chapitre 5 - Autres exigences

## a. Processus de développement :

l’application web sera développée par trois personnes avec un cycle en cascade incrémentale. Les développeurs 
discuteront et montreront le travail fait au client à chaque fin de cycle un planning et disponible en pièce jointe 
pour plus d’information.

Le système peut fonctionner sur des serveurs Apache à partir de cette carte SD et est soumis à des tests rigoureux pour 
garantir sa stabilité. Le fonctionnement nécessite un serveur Web et une station utilisateur pour accéder à la plateforme.

De plus, un grand nombre de tickets doivent être gérés efficacement, une disponibilité continue doit être assurée, 
les données sont protégées et bien documentées pour faciliter la maintenance. Nous nous concentrons sur une expérience 
utilisateur conviviale.

Le logiciel est portable et peut fonctionner dans divers environnements, notamment Apache, LAMP et Raspberry Pi 4, 
garantissant ainsi sa polyvalence.

## b. Règles métier :

### Création de Ticket

**Contrôle d'Accès** : Seuls les utilisateurs authentifiés ont le droit de créer des tickets pour signaler des problèmes
informatiques.

**Champs Obligatoires** : Tous les champs du formulaire de création de ticket doivent être complets avant de permettre 
la soumission. Aucun champ ne doit être laissé vide.

### Suivi

**Changements de Statut** : Seuls les administrateurs et techeniciens appropriées peuvent changer le statut d'un 
ticket. Les statuts valides sont "En Attente", "En Cours" et "Résolu".

### Historique des Tickets

**Consultation d'Historique** : Tous les utilisateurs ont le droit de consulter l'historique complet de leur tickets, mais 
seuls les administrateurs peuvent modifier ou supprimer paramettre et voir les ticket de tout le monde.

**Archivage Automatique** : Les tickets résolus seront automatiquement enregeistré dans un journal de l'admin systême
la clarté de l'historique.

### *Pour la version V0.1 :*

L'application ne prendra pas en compte cette partie du cahier des exigences a cette version, car ne sera toujours 
pas déployer sur un serveur.

### *Pour la version V0.2 :*

L'application ne prendra pas grand chose de cette partie a cette version car l'application sera toujour rudimentaire 
et donc ne sera pas sur le serveur raspberry et le serveur Xamp (équvalent de apache sur windose) ne sera pas sécuriser 
et les mots de passe ne serrons pas crypté car ce n'est pas nésésaire.
