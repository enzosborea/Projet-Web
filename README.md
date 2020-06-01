# Projet-Airbnb Wamingo



Fichier d'instruction (macOS) :

- Version php 7.4.2
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

- Lancement de MailDev avec un le port 2525 (Terminal) :

      maildev -s 2525
       
-- Utilisation de MAMP :

- Lancer le serveur depuis MAMP --> Start Servers

-- Lancement du site depuis votre IDE :

      php -S localhost:8000



