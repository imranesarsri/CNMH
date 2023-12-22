# Lab debug laravel

## Travail a faire
Calcule la somme de deux nombres et faire debug de function de la somme

## Critère de validation
- Installation xdebug
- Utilisation vscode
- Créer un controller CalculeController et appliquer la logique de calcule
- Installation
- Install XDebug sur vscode
# Config php.ini



```
[XDebug]
zend_extension = xdebug

xdebug.mode = debug
xdebug.client_host = 127.0.0.1
xdebug.client_port = 9003
xdebug.start_with_request = yes
```

```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003
        },

    ]
}
```


## Commande

```bash
composer create-project laravel/laravel Lab_Debug_Laravel
```

```bash
php artisan make:controller CalculeController
```

```bash
php artisan serve
```


## Référence
[DEV](https://dev.to/snakepy/how-to-debug-laravel-apps-with-laravel-apps-with-xdebuger-in-vs-code-8cp)
