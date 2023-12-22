# Lab crud laravel basic 

## Travail à faire

- Créer le CRUD des tâches
- Inclure la recherche en utilisant AJAX
- Ajouter la pagination
- Ajouter la base de données incluant la table des projets dans les seeders
- adminLte

___

## Installation Laravel 

```bash
composer create-project laravel/laravel .
```

[Reference Laravel Installation](https://laravel.com/docs/10.x)
___

## Views 
### Create new blade file 

```bash
php artisan make:view Tasks.index
```

### The folders we will need in this project

- folder **Tasks**
  - file index.blade.php
  - file create.blade.php
  - file edit.blade.php
- folder **Layouts**
  - file Layoute.blade.php
  - file Footer.blade.php
  - file Navbar.blade.php
  - file Sidebar.blade.php
  - file Error404.blade.php

### Use adminLte

You need to add the `adminLte` folders [`disk` and `plugins`] to the `Public` folder

[Reference Laravel views](https://laravel.com/docs/10.x/views#main-content)

___

## Controllers
### Create Task controller 

```bash
php artisan make:controller TaskController -r
```
[Reference Laravel Controllers](https://laravel.com/docs/10.x/controllers#main-content)
___


## Routing

```php
Route::resource('/', 'TaskController');
```

[Reference Laravel Routing](https://laravel.com/docs/10.x/routing#main-content)
___

## Model 

```bash
php artisan make:model Project
```

```php
protected $fillable = [
    'name',
    'description',
    'project_id',
];
```

```bash
php artisan make:model Task
```

```php
protected $fillable = [
    'name',
    'description',
];
```

___

## Databases
## 1. Env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lab_crud_laravel_basic
DB_USERNAME=root
DB_PASSWORD=solicoders
```

### 2. Migrations

```bash
php artisan make:migration create_projects_table
```

```php
Schema::create('projects', function (Blueprint $table) {
    $table->id();
    $table->string('name', 50)->unique();
    $table->text('description')->nullable();
    $table->timestamps();
});
```

```bash
php artisan make:migration create_tasks_table
```

```php
Schema::create('tasks', function (Blueprint $table) {
    $table->id();
    $table->string('name', 50)->unique();
    $table->text('description')->nullable();
    $table->unsignedBigInteger('project_id');
    $table->timestamps();
    $table->foreign('project_id')->references('id')->on('projects');
});
```
#### Running Migrations:
```bash
php artisan migrate
```
[Reference Laravel Migrations](https://laravel.com/docs/10.x/migrations#main-content)


### 3. Seeders

```bash
php artisan make:seeder ProjectSeeder
```

#### ProjectSeeder file
```php
public function run(): void
{
    Project::create([
        'name' => 'Portfolio',
        'description' => 'Développement d\'un site web mettant en valeur nos compétences.',
    ]);

    Project::create([
        'name' => 'Arbre des compétences',
        'description' => 'Création d\'une application web pour l\'évaluation des compétences.',
    ]);

    Project::create([
        'name' => 'CNMH',
        'description' => 'Création d\'une application web pour la gestion des patients de centre CNMH.',
    ]);
}
```

#### DatabaseSeeder file
```php
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProjectSeeder::class,
        ]);
    }
}
```
#### Running Seeders
```bash
php artisan db:seed

```
[Reference Laravel seeders](https://laravel.com/docs/10.x/seeding#writing-seeders)

___

