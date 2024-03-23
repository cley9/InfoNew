# Note

## instalar panel de control adminLTE
- composer require jeroennoten/laravel-adminlte 
- view status of Lte, php artisan adminlte:status
- para modificar el diseño del `admintlte` en la ruta del config/admindlte
```php
php artisan adminlte:install --type=full
php artisan adminlte:install --only=config
composer require laravel/ui
config/adminlte.php
```