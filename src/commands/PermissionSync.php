<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionSync extends Command
{
    protected $signature = 'sync:permissions';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        foreach ($this->getRoutes() as $route)
            if(!Permission::whereName("{$route->methods[0]}-/$route->uri")->first())
                Permission::create([
                    'name'          =>  "{$route->methods[0]}-/$route->uri",
                    'guard_name'    => 'web'
                ]);
        $this->comment("All permissions are synced by routes");
    }

    private function getRoutes()
    {
        $blocked = [
            'panel/login',
            'panel/logout'
        ];
        $routes = [];
        foreach (Route::getRoutes() as $route)
            if(startsWith($route->uri, "panel") && !(in_array($route->uri, $blocked)))
                $routes[] = $route;
        return $routes;
    }
}
