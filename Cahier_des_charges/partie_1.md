## I./Chapitre 1 - Objectif et portée 

### Les objectifs généraux :

Le système doit être un système de ticketing interne pour de l'entretien de poste de travail, le délai pour finir ce projet est d'environ 4 mois.
- On doit réaliser un système de ticketing interne pour gérer les demandes de dépannage de poste informatique
- On à créer une formulaire d’inscription pour que les simples visiteurs puissent créer un compte utilisateur ou il devront réussir un CAPTCHA.
- Nous aurons une base de données avec :
  1. Une table qui contient les différents utilisateurs, techniciens, admin web et admin réseau et leurs mots de passe.
  2. Une table avec tous les tickets est toute leur information.
- Un ticket est composé de 4 partie : 
  - Un libellé expliquant le problème, l’administrateur web pourra par la suite le modifier.
  - Le niveau d’urgence échelonné de 1 à 4, l’administrateur web pourra par la suite le modifier.
  - Le nom du demandeur.
  - Le nom de la personne concernée par le problème.
  - Un ticket a aussi un état qui est soit ouvert soit en cours de traitement ou fermé. Qui est automatiquement ouvert quand le ticket est créé, l’administrateur web et le technicien qui y est affecté pourront par la suite modifier ce statut.
- Qu’il y ait différente fonctionnalité en  fonction de qui ce connecte: 
  1. Visiteurs : Consultation des 10 dernières demandes uniquement.
  2. Utilisateurs : Ouverture de tickets de dépannage, consultation de la liste de tous les tickets qu’il a ouvert avec leurs états, et modification du mot de passe via leur profil.
  3. Administrateurs web : Accès à toutes les informations des tickets, possibilité de modifier le libellé, le niveau et l'état des tickets, création de comptes techniciens (deux au départ)  et affectation de tickets ouverts aux techniciens.
  4. Techniciens : Attribution et prise en charge de tickets ouverts, modification de l'état des tickets pris en charge. 
  5. Les admins système: peut par un plateforme web voir les journaux d'activité de l’application.
- Il y plusieurs journaux d'activités qui sont les suivants : 
  - Le premier qui recensera tous les tickets avec comme donnée : la date, l’adresse IP, l’utilisateur qui a fait le ticket et le niveau d’urgence.
  - Le deuxième journal qui recense les tentatives infructueuses de connexion avec comme donnée : date, adresse IP, login et mdp.
  - Le troisième qui est un historique de tous les tickets fermer.

### les acteurs du système :

Le projet implique plusieurs intervenants, Voici la liste des intervenants et leurs responsabilités :
1. **Les Développeurs :**
   - Les développeurs sont responsables de la conception, du développement.
   - Ils doivent s'assurer que le système fonctionne correctement, est sécurisé et répond aux exigences spécifiées dans le cahier des charges.
2. **Le Client - Institut Universitaire de Technologie (IUT) :**
   - Le client, représenté par l'Institut Universitaire de Technologie (IUT), est le commanditaire du projet.
   - Le client définit les besoins et les exigences du système, ainsi que les délais et les budgets.
3. **L'Administrateur Système :**
    - L’administrateur système peut consulter via l’application web les différents journaux d'activité détaillés plus tôt.
4. **L'Administrateur Web :**
    - L'administrateur web peut créer et gérer des comptes techniques, superviser les tickets, et effectuer des ajustements de sur les tickets au besoin.
5. **Les Techniciens :**
    - Les techniciens sont les professionnels chargés de résoudre les problèmes signalés dans les tickets.
    - Ils doivent prendre en charge les tickets ouverts, résoudre les problèmes de manière efficace et mettre à jour l'état des tickets en conséquence.
6. **Les Utilisateurs :**
    - Les utilisateurs sont des élèves ou des professeurs de l’iut qui signalent les problèmes liés à leurs postes de travail.
    - Ils ont la possibilité d'ouvrir des tickets de dépannage, de suivre l'état de leurs tickets et de mettre à jour leur mot de passe via leur profil.
7. **Les Visiteurs :**
    - Les visiteurs sont des utilisateurs non enregistrés du système.
    - Ils peuvent consulter les 10 dernières demandes.

### la portée de l’application :

L’application prendra en compte la création des créations de tickets, la gestion des tickets, la prise en charge des tickets, l’enregistrement des actions dans des journaux, <br> la création de nouveaux utilisateurs et techniciens. Mais ne prendras pas en compte la correction des problèmes signalés et les mises à jour.
