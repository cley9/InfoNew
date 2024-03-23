<!--  -->
## para incluir un nuevo archivo router.php y que lo lea deves de crear en la ruta routes/name.php, 
## luego tendras que ir al provider/RouteServiceProvider, ahi estan las rutas de los archivos routers, lo agregas el creado ejemplo: 
--             Route::middleware('web')
--             ->group(base_path('routes/web.php'));
##  luego tendras que agregar en el la ruta del MIDDLEWARE/Kernel.php 
'admin' => [
               \App\Http\Middleware\EncryptCookies::class,
            // Otros middleware que desees aplicar a las rutas de administración
        ],

-- listo 


## Observaciones 
-- problemas con el comando migrate:fresh --seed no inserta los datos 
 -- db:seed userSeeder solo asi 

 ## instalar panel de control adminLTE
 composer require jeroennoten/laravel-adminlte 
 <!-- -- para ver el estado -->
 php artisan adminlte:status
 <!-- para instalr todo -->
 <!-- php artisan adminlte:install --type=full -->
 <!-- php artisan adminlte:install --only=config -->
  <!-- composer require laravel/ui -->
 config/adminlte.php
 ## para modificar el diseño del admintlte en la ruta del config/admindlte
-- end adminlte
## 