# Portfolio

## Environnement de développement

### Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* nodejs / npm
* Docker
* Docker-compose

Vous pouvez vérifier les pré-requis avec la commande suivante (CLI symfony) :

symfony check:requirements

### Lancer l'environnement de développement

composer install
npm install
npm run build
symfony console d:f:l
docker-compose up -d
symfony serve -d
