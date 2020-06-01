# Projet-Airbnb Wamingo

Fichier d'instruction (macOS) :

- Pré-requis (PHP, MAMP, mySQL, Node.js, npm)

- Version PHP 7.4.2
- Version MAMP 5.7
- Version MySQL 5.7.26
- Version Node.js 12.16.2
- Version npm 6.14.4

-- Installation de Node.js et npm avec Homebrew (Terminal) :

      /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
      
-- Mise à jour de Homebrew :
      
      brew update
      
-- Installation Node.js :

      brew install node
      
-- Installation de npm :

      npm install
   
-- Installation de MailDev :

      npm install -g maildev

-- Paramétrage MailDev :

Modifier la configuration de PHP pour qu'il envoit les emails en utilisant ce serveur SMTP.
    
- Modifier le fichier php.ini --> MAMP/conf/php7.4.2/php.ini

- Dans le fichier php.ini indiquer le port smtp pour recevoir les mails :

      SMTP = localhost
      smtp_port = 2525

- Lancement de MailDev avec le port 2525 (Terminal) :

      maildev -s 2525
       
-- Utilisation de MAMP :

- Lancer le serveur depuis MAMP --> Start Servers

-- Lancement du site depuis votre IDE :

     php -S localhost:8000
      
-- Information de la base de données : 

     dsn : mysql:host=localhost:8890;dbname=wamingo
 
     username : wamingo 
 
     password : hcybhtb0ajfmWaWS
     
     
Fichier d'instruction (Windows) :

- Version php 7.3.5
- Version WAMP 3.1.9
- Version MySQL 5.7.26

-- Utilisation de WAMP (Windows):

- Lancer le serveur depuis WAMP --> Démarrer les services

-- Installation de NodeJS (Windows) :

- télécharger sur le site officiel :

    https://nodejs.org/fr/
   
-- Installation de MailDev (Windows) :

- ouvrez le CMD puis entrer :

      npm install -g maildev

-- Pour lancer Maildev (Windows) :

- ouvrez le CMD puis entrer :

      maildev

- verifier qu'il foctionne (dans votre navigateur web) :

      localhost:1080

Modifier la configuration de PHP pour qu'il envoit les emails en utilisant ce serveur SMTP.
    
- cliquer sur l'icone Wamp dans votre barre des tâches -> php -> php.ini

OU 

- Modifier le fichier php.ini --> wamp\bin\php\php7.3.5\php.ini


- Dans le fichier php.ini indiquer le port smtp pour recevoir les mails :

      SMTP = localhost
      smtp_port = 2525

- Lancement de MailDev avec le port 2525 (CMD) :

      maildev -s 2525
       
-- Utilisation de WAMP :

- Lancer le serveur depuis WAMP --> Démarrer les services

-- Lancement du site depuis votre IDE :

     php -S localhost:8005
      
-- Information de la base de données : 

     dsn : mysql:host=localhost:8005;dbname=wamingo
 
     username : TestWamingo 
 
     password : lRP7vRKf5gdxFU4m
 
 



