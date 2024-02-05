# Conception du livrable

## Introduction

Le projet vise à développer une application web de ticketing interne permettant aux utilisateurs de signaler et de 
suivre les problèmes informatiques sur leurs PC au sein de l'organisation. L'application repose sur une architecture web
classique, utilisant PHP, HTML, CSS pour le développement front-end, tandis que le back-end est géré par 
un serveur Apache déployé sur un Raspberry Pi. La gestion des données est assurée par une base de données ( MariaDB ou slq  a voir).

## Model utilisé

Pour ce projet nous utiliserons comme model pour l'application le model mvc (model ,vue ,controleur). Donc dans cette application 
le model sera la base de donnée qui stockera toute les donnée relative a notre application, les pages html et certaine fonction php (a voir)
elle serviront en tant que vue pour les information nécessaire et le controleur lui seras des fonction php qui traiterons 
des requêtes HTTP interagiras avec la base de données. 


<img src="uml.PNG">

Donc voici notre diagrame uml de notre architecture model vue controleur donc comme je les explique plus tôt on a bien 
un model qui est la base de données qui et interfacé par notre serveur appache, il y a aussi notre script php qui nous 
servent de controleur et enfin la vue qui est le script html. 

### Gestion des utilisateur 

Pour la partie gestion utilisateur tout d'abord les différents uttilisateurs seront stocker dans un base de données 
dans la table utilisateur (login, mdp, perm, ip c'est ce qui défini si il sont admin ou utilisateur). Et pour ajouter de 
nouveaux utilisateurs nous allons utiliser une fonction php attacher a un formulaire html qui ferat des requette sql 
pour ajouter des nouveaux utilisateurs. Il y'a auras aussi de fonction php attacher au formulaire de connexion qui 
ferat un select pour vérifier que l'utilisateur existe bien et le rediriger sur la bonne page. 

Nous utiliserons aussi des sesion pour véfifier que les utilisateurs on bien le droit d'être sur la page avec une 
fonction php de vérification lancer au chargement de chaque page. Nous aurons donc aussi un fonction pour 
fermer la session et revenir a la page principale.

### Gestion ticket 

Pour la gestion des tickets nous allons faire pariel que pour les utilisateur nous allons faire une table sql que vas 
stocké toute les informations ( la table ticket avec les colone id, login, libellé, urgence, demandeur, état, tech, date, ip)
nous aurons donc de fonction php qui nous servirons à ajouter/modifier de ticket sur la base de données avec des requette sql
et d'autre à les afficher.

Nous aurons aussi des fonction javascript qui nous servirons a ouvrir des formulaire en popup pour voir et ou modifier de 
ticket elle utiliserons de formulaire html qui serons cacher puis qui deviendrons visible.

Il y auras aussi des journeaux qui listerons beaucoups de chose différente comme les ticket fermer, les tickets ouvet et 
un dernier qui lui listeras les erreur de connection qui serons stocké dans une table prévu a cette effet ( la table erreur_co 
avec le colone ip, date, login, mdp) 