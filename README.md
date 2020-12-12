# metronic

1) Config your database in .env.

2) Run:
`composer require amiranbari/metronic:dev-master`

 Run: `php artisan vendor:publish` - Then select 1.
 
 4) Chang locale to `fa` in `config/app.php`
 
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
 
 #### Laravel 7
 
 Change `composer.json` autoload section like below
```
   "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories",
            "app/Models/"
        ],
        "files": [
            "app/Tools/helpers.php"
        ]
    }
```
Run: `composer dump-autoload`
