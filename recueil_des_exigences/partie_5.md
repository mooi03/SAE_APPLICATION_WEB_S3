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

**Journal d'activiter** : il y auras plusieurs journeaux d'activiter qui pourrons êtres consulter par l'adim res et il 
rensegnerons les tickets fermer, ce ouvert , et les erreur de connexion.

## e. Utilisation et utilisabilité :

### Expérience Utilisateur

**Interface Intuitive** : L'interface utilisateur doit être intuitive, facilitant la navigation et l'utilisation pour 
des utilisateurs de différents niveaux de compétence.

**Ergonomie** : L'application doit être conçue de manière à minimiser la fatigue visuelle et à favoriser une utilisation
confortable sur des périodes prolongées.

**Réactivité** : Les interactions avec l'interface utilisateur doivent être réactives, assurant une expérience 
utilisateur fluide sans délais perceptibles.

### Accessibilité

**Accessibilité Universelle** : notre application web devras respecter les norme W3C pour garantir que tout le monde 
pourras utiliser le site sans problème.

**Complatibilité web** : nous devrons aussi faire attention a ce que notre application soit compatible avec les 
principeaux navigateur web c'est a dire chrome, firefox, opera ...  


## f. Maintenance et protabilité  :

Nous allons donc comme demander dans le chaier des charges porter notre application sur un raspberry pi qui seras accesible 
depuis le poste de l'iut. donc nous arrons deux version une qui seras sur notre git et l'autre qui seras sur le raspberry 
de l'iut et quand nous arriverons a une version importante nous ferrons une maintnance sur le raspberry pour mettre 
l'application à jour. Il est aussi possible qu'il soit fait des maintenance (hotfix) rapide a cas ou il y aurait un gros bug qui
rende l'application inutilisable.

### *Pour la version V0.1 :*

L'application ne prendra pas en compte cette partie du cahier des exigences a cette version, car ne sera toujours 
pas déployer sur un serveur.

### *Pour la version V0.2 :*

L'application ne prendra pas grand chose de cette partie a cette version car l'application sera toujour rudimentaire 
et donc ne sera pas sur le serveur raspberry et le serveur Xamp (équvalent de apache sur windose) ne sera pas sécuriser 
et les mots de passe ne serrons pas crypté car ce n'est pas nésésaire.
