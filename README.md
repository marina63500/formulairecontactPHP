# formulairecontactPHP
Réaliser un formulaire de contact en PHP

pour commencer ,il faut récuperer mon dossier à l'aide d'un git clone,

# Formulaire de Contact PHP avec PHPMailer et Mailtrap

Ce projet utilise le formulaire de contact en PHP utilisant PHPMailer pour envoyer des emails. 
Mailtrap est utilisé comme service SMTP pour tester l'envoi des emails en toute sécurité.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants :

- PHP (https://www.php.net/) installé sur votre machine.(v 8.3.&)
- Composer (https://getcomposer.org/) pour gérer les dépendances PHP.(gestionnaire de paquets)
- Un compte Mailtrap (https://mailtrap.io/) pour récupérer les informations SMTP.


## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/votre-repo.git
   cd votre-repo

2. Installez  Composer :

sur le terminal:composer install

3. création d'un dossier .env(variable d'environnement),ou je crée des variables qui reprennent mes données à masquer
MAIL_HOST = 'sandbox.smtp.mailtrap.io'
MAIL_USERNAME = "b9091b0c661b49"
MAIL_PASSWORD = '78ca2602cbacdc'
MAIL_PORT = '2525'

EmailTo = "lesportsenior@hotmail.fr"

création d'un .env example pour masquer les données et ce sont celles là à modifier.


4.Utilisation
Démarrez le serveur PHP :

Ouvrez votre navigateur et remplisser le formuler de contact.

Remplissez le formulaire avec les informations nécessaires (nom,prénom,email,objet, message).

soumettre le formulaire , un email est envoyé via Mailtrap pour test.



5.Structure du Projet

création de feuilles pour projet:

index.php : page principale contenant le formulaire de contact.

traitement.php : script qui traite les données du formulaire et envoie l'email.

(test.php : Un script de test pour vérifier l'envoi d'email.)pour moi me souvenir à ne pas prendre en compte dans le read me.

style.css: feuille CSS pour le style du formulaire.

.vendor : répertoire contenant les dépendances installées par Composer.
.gitignore : grise le fichier [.vendor] et [.env] pour qu'ils n'apparaissent pas dans le code pour  des raisons de confidentialité et de lourdeur sur Github.(dossier dans lequel on enleve les dossiers pour lesquels on ne veut pas qu ils soit visibles).
.env = fichier de configuration des variables d'environnement.
composer.json= fichier de configuration  créer par Composer.
composer.lock = fichier de verrouillage des dépendances  créer par Composer.

Dépendances(paquet)
PHPMailer : Une classe PHP complète pour la création et le transfert d'emails.
phpdotenv : Une bibliothèque pour charger les variables d'environnement à partir d'un fichier (.env).

Auteurs:

marina 




