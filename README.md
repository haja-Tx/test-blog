# test-blog

Ceci est une application de blog minimaliste (CRUD) avec webpack/symfony en utilisant vichuploader pour le telechargement d'image

1. composer install
2. php bin/console doctrine:database:create
3. php bin/console doctrine:schema:update --force
4. yarn install
5. yarn run dev
6. symfony server:start
7. php bin/console doctrine:fixtures:load [pour ajouter des articles pour tester (Faker)]

Pour se rendre sur la partie admin, ajouter un /admin sur l'url 127.0.0.1
