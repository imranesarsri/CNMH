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

xdebug.mode = "C:\Program Files (x86)\php-8.2.11\ext\php_xdebug.dll"
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
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 0,
            "runtimeArgs": [
                "-dxdebug.start_with_request=yes"
            ],
            "env": {
                "XDEBUG_MODE": "debug,develop",
                "XDEBUG_CONFIG": "client_port=${port}"
            }
        },
        {
            "name": "Launch Built-in web server",
            "type": "php",
            "request": "launch",
            "runtimeArgs": [
                "-dxdebug.mode=debug",
                "-dxdebug.start_with_request=yes",
                "-S",
                "localhost:0"
            ],
            "program": "",
            "cwd": "${workspaceRoot}",
            "port": 9003,
            "serverReadyAction": {
                "pattern": "Development Server \\(http://localhost:([0-9]+)\\) started",
                "uriFormat": "http://localhost:%s",
                "action": "openExternally"
            }
        }
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
