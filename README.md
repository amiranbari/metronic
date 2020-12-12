# metronic

1) Config your database in .env.

2) Run:
`composer require amiranbari/metronic:dev-master`

 Run: `php artisan vendor:publish` - Then select 1.
 
 4) Change locale to `fa` in `config/app.php`
 
 5) Add this to your providers in `config/app.php`
 
 `App\Providers\MetronicServiceProvider::class,`
 
 #### Laravel 8
 Put this in `User.php` in Models directory
 
 `use Spatie\Permission\Traits\HasRoles;`
 
 In User class:
`use HasFactory, Notifiable, HasRoles;`

Add `level` to `fillable` fields.

Change `composer.json` autoload section like below"
```
   "autoload": {
           "psr-4": {
               "App\\": "app/",
               "Database\\Factories\\": "database/factories/",
               "Database\\Seeders\\": "database/seeders/"
           },
   		"files": [ "app/Tools/helpers.php" ]
       }   
 ```
 
 Run: `composer dump-autoload`
 
 Add these seeders call in `DatabaseSeeder.php`:
```
	$this->call(UserSeeder::class);
	$this->call(PermissionSeeder::class);
```

- `php artisan migrate --seed`

 Add these into guards in `auth.php`:
```
	'admin' => [
            'driver' => 'session',
            'provider' => 'users',
        ]
```
5) Put these in `Kernel.php` in Http directory

`use App\Http\Middleware\Panel\CheckPermission;`

6) Put these in `Kernel.php` in $routeMiddleware

`'permission' => CheckPermission::class`

  
- `php artisan serve`

Go to `127.0.0.1:8000/panel/login`

Email: `admin@gmail.com`
Password: `12345678`

Enjoy it.

