
# Ecoit 🌳📕

Dans le cadre de ma formation de développeur web et web mobile, j'ai été amenée à réaliser une application de cours en ligne ou les élèves peuvent suivrent des formations par thèmes.

# Contexte

C’est un fait, la crise écologique est devenue une urgence majeure. La sixième extinction 
massive a déjà commencé et le changement climatique se fait de plus en plus ressentir au fil 
des années. Mais qu’en est-il d’internet ?
En matière d’émissions de CO2, il pollue 1.5 fois plus que le transport aérien. D’ailleurs, en 20 
ans, le poids d’une page web a été multiplié par 115 (source : https://www.greenit.fr/)
Face à ce constat, un organisme de formation a été fondé en 2017 : EcoIT. Son objectif est 
d’être une plateforme d’éducation permettant à tout instructeur expert en accessibilité et en 
éco-conception web de présenter des modules de cours.
À terme, EcoIT désire devenir la référence française pour les développeurs soucieux de leur 
impact digital. Et pourquoi pas délivrer enfin un label officiel pour classer les sites web selon 
leur empreinte numérique.

# Fonctionnalités attendues

US1. Gérer les instructeurs
Utilisateurs concernés : administrateur

L’administrateur sera un employé attitré par Eco IT. Lui seul pourra créer le compte des 
instructeurs. 
Une page du site web devra permettre à tout visiteur de pouvoir postuler en tant 
qu’instructeur. Il devra alors fournir un nom, un prénom, une adresse e-mail, une photo de 
profil, une petite description sur ses spécialités ainsi qu’un mot de passe sécurisé. Si 
l’échange au cours d’une réunion entre lui et EcoIT est positif, l’administrateur validera sa 
demande.

US2. Créer un compte d’apprenant
Utilisateurs concernés : apprenants

Pour qu’un apprenant puisse suivre les formations, il devra au préalable s’enregistrer une 
première fois. Il suffira d’une adresse e-mail, d’un pseudo et d’un mot de passe sécurisé.

US3. Se connecter
Utilisateurs concernés : administrateur, instructeurs, apprenants

Quel que soit le type de compte, tout visiteur pourra se connecter grâce au même 
formulaire de connexion. Les identifiants à entrer seront l’adresse e-mail et le mot de passe.

US4. Créer une formation
Utilisateurs concernés : instructeurs

Tout instructeur pourra créer ses propres formations :
- Une formation possède au moins un titre
- Elle sera structurée grâce à des sections, et ces dernières regrouperont des leçons.
- Chaque leçon aura une vidéo ainsi qu’une explication textuelle.

US5. Suivre une formation
Utilisateurs concernés : apprenants

S’il n’est pas connecté, l’apprenant doit le faire pour suivre une formation. 
Lorsque l’on clique sur le bouton “leçon terminée”, la leçon est validée et le parcours 
progresse.
Si toutes les leçons ont été suivies, alors la formation est considérée comme terminée pour 
l’apprenant

US6. Découvrir le répertoire des formations
Utilisateurs concernés : apprenants, visiteurs

Dans ce catalogue, les formations seront réparties dans une grille.
Chaque formation verra affiché son titre, une image, un petit texte d’accroche et un bouton 
pour accéder à la formation.
Deux fonctions dynamiques doivent être disponibles pour filtrer les résultats, et ce sans 
recharger la page :
- Une barre de recherche
- Une option “Formations en cours” / “Formations terminées” si l’utilisateur est un 
apprenant
Nota Bene : Sur la page d’accueil, seules les 3 formations sorties les plus récemment seront 
visibles.

US7. Lier un quiz à une section
Utilisateurs concernés : apprenants

Pour être sûr que l’apprenant ait bien retenu les concepts enseignés dans les leçons, un quiz peut être ajouté en fin de section. 
Sur la page d’un quiz, les questions sont affichées les unes à la suite des autres. Chaque 
question est un formulaire dont les réponses sont des champs de type radio. Au clic du 
bouton “corriger”, le quiz révèle si les réponses choisies sont correctes ou incorrectes. Si la 
réponse sélectionnée est incorrecte, alors la bonne réponse est montrée.

# Installation en local

* Cloner le projet 
   git clone git@github.com:newo77/Projet_ecf.git

* Modifier le fichier .env en fonction de votre environnement de developpement

* Installez les dépendances avec composer
  composer install
  
* Installez les dépendances gérées par Webpack
  yarn install
  
* Activer les migrations afin de récupérer entièrement la base de données
  symfony console doctrine:migrations:migrate (pour effectuer cette commande vous devez avoir le CLI de symfony!)
  
* Lancez le serveur de Symfony
  symfony serve
  
# Déployer l'application sur Heroku

Pour la base de donnée en mysql, j'ai utilisé Jawsdb et celui-ci m'as donné des idd à renseigner pour faire le lien avec ma bdd actuelle.

* Se connecter avec son compte Heroku
  
  heroku login
  
* Créer un nouveau projet
 
   heroku create Ecoit
  
* Configurer les variables d'environnement

   heroku config:set APP_ENV=prod heroku 

   config:set APP_SECRET=$(php -r 'echo bin2hex(random_bytes(16));')

* Ajouter NodeJS au buildpack

   heroku buildpacks:add --index 1 heroku/nodejs

* Faire un backup de la BDD et utiliser ce backup pour alimenter la base de données fournis par JawsDB avec les infos disponibles par celle-ci

   mysqldump -u root -p ecoit > backup.sql     mysql -h NEWHOST -u NEWUSER -pNEWPASS NEWDATABASE < backup.sql


* Configurer la nouvelle URL de la base de donnée fournie par JawsDB

   heroku config:set DATABASE_URL=NEWDATABASE_URL

* Pousser le déploiement

   git push heroku main





