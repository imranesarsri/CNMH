# lab laravel basic

## Travail à faire

- Créer le CRUD des tâches
- Inclure la recherche en utilisant AJAX
- Ajouter la pagination
- Ajouter la base de données incluant la table des projets dans les seeders
- adminLte

## Les Processus Du Travail

1. Commencez par `installer` Laravel via le terminal avec cette commande :

```
composer create-project laravel/laravel=10 .
```

2. Ajoutez le nom de la base de données au fichier .env.:

```
composer create-project laravel/laravel=10 .
```
3. Procédez à la création des tables en exécutant ces commandes :

```
php artisan make:migration create_projects_table

php artisan make:migration create_tasks_table
```


4. migration

```
php artisan migrate 
```

5. model

```
php artisan make:model Project 
```
<!--  -->
<!--  -->
migration
php artisan migrate:rollback


morphs()
<!--  -->
<!--  -->


## database et tables
- Database name : Lab_Laravel_basic
- tables : 
  - Project
  - Task

