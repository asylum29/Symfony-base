# Symfony-base
Представляет собой шаблон проекта Symfony с предварительно настроенными авторизацией и админкой.
## Включенные модули:
* [EasyAdminBundle](https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html)
* [EasyAdminExtensionBundle](https://github.com/alterphp/EasyAdminExtensionBundle)
* [LiipImagineBundle](https://symfony.com/doc/2.0/bundles/LiipImagineBundle/index.html)
* [FOSUserBundle](https://symfony.com/doc/current/bundles/FOSUserBundle/index.html)
* [VichUploaderBundle](https://symfony.com/doc/master/bundles/EasyAdminBundle/integration/vichuploaderbundle.html)
* [WhiteOctoberPagerfantaBundle](https://github.com/whiteoctober/WhiteOctoberPagerfantaBundle)
* [FriendsOfPHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
## Установка:
```
composer install
```
```
php bin/console doctrine:database:create
```
```
php bin/console doctrine:migrations:migrate
```
```
php bin/console fos:user:create
```
```
php bin/console app:set-admin {username}
```
```
yarn install
```
```
yarn encore dev
```
```
php bin/console server:run
```
