<?php


namespace App\DB;


use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Permission;

class PermissionRepo
{
    /**
     * @return Collection|Permission[]
     */
    public function get()
    {
        return Permission::all();
    }
}
