****
# Cas d'utilisation 1: Recueillir les demandes

**Nom :** Recueillir les demandes  
**Contexte d'utilisation :** La plateforme devra recueillir les demandes disponibles par les utilisateurs  
**Portée :** Boîte noire  
**Niveau :** Stratégique  
**Acteur principal :** Administrateur  
**Intervenants et intérêts :** Administrateur web, administrateur système, techniciens et utilisateur: recueillir les demandes  
**Précondition :** Avoir accès à la plateforme  
**Garantie en cas de succès :** Bon déroulement de la demande du client allant de la création du ticket ou du compte  
**Déclencheur :** Demande d’un client

## Scénario nominal :
1. Saisir la demande
2. Exécuter la demande
3. Enregistrer la demande dans le journal d’activité
****
# Cas d'utilisation 2: Gérer les tickets

**Nom :** Gérer les tickets  
**Contexte d'utilisation :** La plateforme devra prendre en charge les tickets inscrits dans le journal d’activité  
**Portée :** Boîte noire  
**Niveau :** Stratégique  
**Acteur principal :** Administrateur, techniciens  
**Intervenants et intérêts :**
- Administrateur web, administrateur système, techniciens: gérer les tickets
- Utilisateur: insérer des tickets en fonction de leur demande  
  **Précondition :** Être inscrit en tant qu’utilisateur  
  **Garantie en cas de succès :** Bon déroulement allant de la création du ticket vers la résolution du problème  
  **Garantie minimale :** Bonne confidentialité du ticket  
  **Déclencheur :** Demande d’un client avec la création d’un ticket

## Scénario nominal :

1. Saisir la demande
2. Ajouter le ticket au journal d’activité
3. Traiter le ticket
****
# Cas d'utilisation 3: Accueillir les utilisateurs

**Nom :** Accueillir les utilisateurs  
**Contexte d'utilisation :** La plateforme devra prendre en charge tout type d’utilisateur ayant accès à la plateforme  
**Portée :** Boîte noire  
**Niveau :** Stratégique  
**Acteur principal :** Administrateur, utilisateur, visiteur  
**Intervenants et intérêts :**
- Administrateur web, administrateur système: gérer les accueils
- Utilisateur: inscription ou visite de la page  
  **Précondition :** Avoir accès à la plateforme  
  **Garantie en cas de succès :** Bon déroulement allant de la création d’un compte utilisateur vers une visite ou d’une authentification d’un technicien ou d’un administrateur  
  **Déclencheur :** Utilisation de la plateforme par un utilisateur, un visiteur, un administrateur ou un technicien

## Scénario nominal :

1. Ajouter la visite dans le journal d’activité
2. Saisir la création d’un compte ou non
3. Attribution des droits associés ou non
****
# Cas d'utilisation 4: Gérer les comptes

**Nom :** Gérer les comptes  
**Contexte d'utilisation :** La plateforme devra gérer toutes les tâches propres à chaque utilisateur  
**Portée :** Boîte noire  
**Niveau :** Stratégique  
**Acteur principal :** Administrateurs, utilisateur, visiteur, technicien  
**Intervenants et intérêts :** Tout le monde  
**Précondition :** Avoir accès à la plateforme et avoir un compte dessus (être inscrit)  
**Garantie en cas de succès :** Bon déroulement allant de l’inscription d’un utilisateur vers l’attribution de l’entièreté de ses droits  
**Déclencheur :** Identification ou création d’un compte par un utilisateur

## Scénario nominal :

1. Création ou identification d’un compte par un utilisateur
2. Attribution des droits en fonction de l’utilisateur
3. Ajout de celle-ci dans le journal d’activité

**Liste des variantes :** La demande peut être un ticket ou un nouvel utilisateur
****
# Cas d'utilisation 5: Modifier les tickets

**Nom :** Modifier les tickets  
**Contexte d'utilisation :** La plateforme devra permettre au technicien et à l’administrateur de modifier les tickets  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Administrateur, technicien  
**Intervenants et intérêts :**
- Administrateur web, administrateur système, techniciens: modifient les tickets
- Utilisateur: crée les tickets  
  **Précondition :** Créer un ticket et avoir les droits pour le modifier  
  **Garantie minimale :** Bonne confidentialité du ticket  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant de la modification du ticket à l’ajout de celui-ci dans le journal d’activité  
  **Déclencheur :** Demande d’un client ou mauvais jugement du client concernant l’urgence du ticket

## Scénario nominal :

1. Saisir la demande
2. Exécuter la modification
3. Enregistrer la modification dans le journal d’activité
****
# Cas d'utilisation 6: Modifier le niveau d’urgence du ticket

**Nom :** Modifier le niveau d’urgence du ticket  
**Contexte d'utilisation :** La plateforme devra permettre à l’administrateur de modifier le niveau d’urgence du ticket  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Administrateur  
**Intervenants et intérêts :**
- Administrateur web: modifie le niveau d’urgence du ticket
- Utilisateur: crée le ticket en fonction de ses critères  
  **Précondition :** Créer un ticket et avoir les droits nécessaires pour le modifier  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant de la création du ticket vers la modification de son niveau d’urgence  
  **Déclencheur :** Demande d’un client ou mauvais jugement du client concernant l’urgence du ticket

## Scénario nominal :

1. Saisir la demande
2. Exécuter la demande
3. Enregistrer la demande dans le journal d’activité
****
# Cas d'utilisation 7: Modifier l'état du ticket

**Nom :** Modifier l'état du ticket  
**Contexte d'utilisation :** La plateforme devra permettre aux techniciens et à l’administrateur de modifier le niveau d’urgence du ticket  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Administrateur, techniciens  
**Intervenants et intérêts :**
- Administrateur web, techniciens: modifient le niveau d’urgence du ticket
- Utilisateur: crée le ticket en fonction de ses critères  
  **Précondition :** Créer un ticket et avoir les droits nécessaires pour modifier son état  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant de la création du ticket vers la modification de son état  
  **Déclencheur :** Le ticket est soit en traitement ou terminé

## Scénario nominal :

1. Saisir la modification
2. Exécuter la modification
3. Enregistrer la modification dans le journal d’activité
****
# Cas d'utilisation 8: Modifier le libellé du ticket

**Nom :** Modifier le libellé du ticket  
**Contexte d'utilisation :** La plateforme devra permettre à l’administrateur de modifier le libellé du ticket  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Administrateur  
**Intervenants et intérêts :**
- Administrateur web: modifie le libellé du ticket
- Utilisateur: crée le ticket en fonction de ses critères  
  **Précondition :** Créer un ticket et avoir les droits nécessaires pour le modifier  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant de la modification du libellé vers la résolution du problème lié au libellé  
  **Déclencheur :** Demande d’un client

## Scénario nominal :

1. Saisir la modification
2. Exécuter la modification
3. Enregistrer la modification dans le journal d’activité
****
# Cas d'utilisation 9: Créer les tickets

**Nom :** Créer les tickets  
**Contexte d'utilisation :** La plateforme devra créer les tickets en fonction des critères définis par le client  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Client  
**Intervenants et intérêts :**
- Administrateur système, techniciens: gèrent les tickets créés par les utilisateurs
- Utilisateur: créent les tickets en fonction de leur cas, du niveau d’urgence  
  **Précondition :** Avoir un compte utilisateur  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant de la création du ticket vers la résolution du problème technique  
  **Déclencheur :** Problème technique au niveau de l’utilisateur inscrit

## Scénario nominal :

1. Saisir la demande de création de ticket
2. Exécuter la demande dans le journal d’activités
3. Vérification de l’état d’urgence inscrit par l’utilisateur
4. Résolution du problème technique

## Extension :

- Le ticket qui n’a pas reçu de bonne vérification de son état d’urgence se verra modifié par l’administrateur son niveau d’urgence
****
# Cas d'utilisation 10: Créer les techniciens

**Nom :** Créer les techniciens  
**Contexte d'utilisation :** La plateforme devra permettre de créer de nouveaux profils techniciens en cas de besoin  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Techniciens  
**Intervenants et intérêts :**
- Administrateur web: créer de nouveaux utilisateurs techniciens
- Techniciens: nouveaux utilisateurs avec les droits associés  
  **Précondition :** Avoir les droits nécessaires  
  **Garantie en cas de succès :** Bon déroulement allant de la création du technicien jusqu’à sa mise en activité  
  **Déclencheur :** Besoin au sein du fonctionnement de la plateforme

## Scénario nominal :

1. Saisir le besoin
2. Exécuter le besoin
3. Créer le compte et associer les droits
4. Enregistrer la création du compte dans le journal d’activité
****
# Cas d'utilisation 11: Modifier mot de passe

**Nom :** Modifier mot de passe  
**Contexte d'utilisation :** La plateforme permettra aux utilisateurs inscrits de pouvoir modifier leur mot de passe  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Utilisateur inscrit  
**Intervenants et intérêts :**
- Utilisateur: modification du mot de passe en cas d’oubli ou de non satisfaction  
  **Précondition :** Avoir accès à la plateforme et avoir les droits d’utilisateurs inscrits  
  **Garantie en cas de succès :** Bon déroulement de la modification de son mot de passe  
  **Déclencheur :** Action de l’utilisateur inscrit

## Scénario nominal :

1. Saisir la modification
2. Exécuter la modification
3. Modifier le champ mot de passe de l’utilisateur dans la base de données
4. Attribution du nouveau mot de passe de l’utilisateur dans le système

## Extension :

- Cette modification ne sera pas inscrite dans le journal des activités
****
# Cas d'utilisation 12: Inscription des utilisateurs

**Nom :** Inscription des utilisateurs  
**Contexte d'utilisation :** La plateforme devra recueillir les demandes disponibles par les utilisateurs  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Utilisateur  
**Intervenants et intérêts :**
- Utilisateur: pouvoir passer de visiteur à utilisateur inscrit avec les droits associés  
  **Précondition :** Avoir accès à la plateforme  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant vers la création d’un compte utilisateur  
  **Déclencheur :** Demande d’un visiteur

## Scénario nominal :

1. Saisir la demande d’inscription
2. Exécuter la demande d'inscription
3. Enregistrer la demande dans le journal d’activité
4. Donner les droits associés à l’utilisateur

## Informations connexes :

Informations complémentaires.
****
# Cas d'utilisation 13: Création des utilisateurs

**Nom :** Création des utilisateurs  
**Contexte d'utilisation :** La plateforme devra permettre au visiteur de créer un compte utilisateur s'ils le souhaitent  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Utilisateur  
**Intervenants et intérêts :**
- Utilisateur: pouvoir passer de visiteur à utilisateur inscrit avec les droits associés  
  **Précondition :** Avoir accès à la plateforme  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant vers la création d’un compte utilisateur  
  **Déclencheur :** Demande d’un visiteur

## Scénario nominal :

1. Saisir la demande d’inscription
2. Création du compte avec les droits utilisateurs
3. Enregistrer la demande dans le journal d’activité
4. Donner les droits associés à l’utilisateur
****
# Cas d'utilisation 14: Consulter les tickets

**Nom :** Consulter les tickets  
**Contexte d'utilisation :** La plateforme devra permettre aux techniciens et à l’administrateur web d'accéder à l’entièreté des tickets  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Administrateur web  
**Intervenants et intérêts :**
- Administrateur web, techniciens: avoir accès aux informations présentes dans les tickets  
  **Précondition :** Avoir les droits nécessaires afin de pouvoir consulter les tickets  
  **Garantie en cas de succès :** Bon déroulement de la consultation du ticket avec une bonne sécurité  
  **Déclencheur :** Demande d’un client ou action nécessaire des techniciens ou de l’administrateur web

## Scénario nominal :

1. Accéder au journal d’activité
2. Consulter les informations du ticket
3. Enregistrer la consultation dans le journal d’activité
****
# Cas d'utilisation 15: Attribution des tickets

**Nom :** Attribution des tickets  
**Contexte d'utilisation :** La plateforme devra attribuer les tickets aux techniciens disponibles  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Techniciens  
**Intervenants et intérêts :**
- Techniciens: pouvoir intervenir sur les tickets  
  **Précondition :** Avoir accès à la plateforme, avoir les droits nécessaires  
  **Garantie en cas de succès :** Bon déroulement de la demande du client allant de la création du ticket jusqu’à la réalisation de celui-ci  
  **Déclencheur :** Techniciens disponibles

## Scénario nominal :

1. Connexion du technicien
2. Accès au journal d’activité par le technicien
3. Attribution du ticket par le technicien
****
# Cas d'utilisation 16: Consulter le journal d’activité

**Nom :** Consulter le journal d’activité  
**Contexte d'utilisation :** La plateforme devra permettre à l’administrateur système d'accéder au journal d’activité  
**Portée :** Boîte noire  
**Niveau :** Utilisateur  
**Acteur principal :** Administrateur système  
**Intervenants et intérêts :**
- Administrateur système: accéder au journal d’activité  
  **Précondition :** Avoir les droits nécessaires en tant qu’administrateur système  
  **Garantie en cas de succès :** Bon déroulement du cas d'utilisation allant du besoin d’accéder au journal vers sa réussite  
  **Déclencheur :** Besoin de l’administrateur système

## Scénario nominal :

1. Demande de l’administrateur
2. Connexion de l’administrateur
3. Exécuter la demande

## Extension :

- L’administrateur système accède au journal d’activité par le biais de l’administrateur web
****
# Cas d'utilisation 17: Connexion des utilisateurs

**Nom :** Connexion des utilisateurs  
**Contexte d'utilisation :** La plateforme devra permettre aux utilisateurs de se connecter et de se reconnecter sur leur même compte  
**Portée :** Boîte noire  
**Niveau :** Sous-fonction  
**Acteur principal :** Tous les utilisateurs  
**Intervenants et intérêts :**
- Administrateur web, administrateur système, techniciens et utilisateur: accéder à leur compte avec les droits associés à celui-ci  
  **Précondition :** Avoir accès à la plateforme, avoir un compte sur la plateforme  
  **Garantie en cas de succès :** Bon déroulement de la demande de l’utilisateur allant de la connexion vers l'attribution des droits  
  **Déclencheur :** Demande d’un utilisateur

## Scénario nominal :

1. Créer un compte
2. Se déconnecter de son compte
3. Connexion à son compte
4. Attribution des droits
5. Attribution de ses ressources

## Informations connexes :

Les connexions infructueuses seront notifiées dans le journal d’activité
****
# Cas d'utilisation 18: Déconnexion des utilisateurs

**Nom :** Déconnexion des utilisateurs  
**Contexte d'utilisation :** La plateforme devra permettre aux utilisateurs de se déconnecter sur leur même compte  
**Portée :** Boîte noire  
**Niveau :** Sous-fonction  
**Acteur principal :** Tous les utilisateurs  
**Intervenants et intérêts :**
- Administrateur web, administrateur système, techniciens et utilisateur: déconnexion de leur compte  
  **Précondition :** Avoir accès à la plateforme, avoir un compte sur la plateforme  
  **Garantie en cas de succès :** Bon déroulement de la demande de l’utilisateur allant de la demande vers la déconnexion complète et vérifiable  
  **Déclencheur :** Demande d’un utilisateur

## Scénario nominal :

1. Créer un compte
2. Connexion à son compte
3. Attribution des droits associés
4. Attribution des ressources associées
5. Déconnexion de son compte
****