## I./Chapitre 1 - Objectif et portée

#### Les objectifs généraux :

concevoir une application web qui donnera la possibilité aux utilisateurs de l’application, de soumettre et de suivre les demandes de dépannage de manière efficace. Fournira aussie un outil facile pour la gestion des demandes de dépannage des utilisateurs pour l’administrateur web et les techniciens. Et assurer la disponibilité, la sécurité et la performance pour répondre aux besoins du client.


#### les acteurs du système :

Le projet implique plusieurs intervenants, Voici la liste des intervenants et leurs responsabilités
1. **L'Administrateur Système :**
   - L’administrateur système peut consulter via l’application web les différents journaux d'activité détaillés plus tôt.
2. **L'Administrateur Web :**
   - L'administrateur web peut créer et gérer des comptes techniques, superviser les tickets, et effectuer des ajustements de sur les tickets au besoin.
3. **Les Techniciens :**
   - Les techniciens sont les professionnels chargés de résoudre les problèmes signalés dans les tickets.
   - Ils doivent prendre en charge les tickets ouverts, résoudre les problèmes de manière efficace et mettre à jour l'état des tickets en conséquence.
4. **Les Utilisateurs :**
   - Les utilisateurs sont des élèves ou des professeurs de l’iut qui signalent les problèmes liés à leurs postes de travail.
   - Ils ont la possibilité d'ouvrir des tickets de dépannage, de suivre l'état de leurs tickets et de mettre à jour leur mot de passe via leur profil.
5. **Les Visiteurs :**
   - Les visiteurs sont des utilisateurs non enregistrés du système.
   - Ils peuvent consulter les 10 dernières demandes.

#### la portée de l’application :

L’application prendra en compte la création des créations de tickets, la gestion des tickets, la prise en charge des tickets, l’enregistrement des actions dans des journaux, <br> la création de nouveaux utilisateurs et techniciens. Mais ne prendras pas en compte la correction des problèmes signalés et les mises à jour.

### *pour la version V0.1 :*

L'application ne serra que des pages html avec du css il n'y auras pas de php donc pas de gestion d'utilisateurs et de gestion de tickets.

### *pour la version V0.2 :*
L'application comportera la gestion des utilisateurs et des pages auxquels ils ont le droit d’aller, il y aura donc plus de pages html que dans la première version couplée à du css et du php, il n'y aura donc pas de gestion de ticket. Et pour la base de données qui gère les mots de passe des utilisateurs elle sera faite en local provisoirement.