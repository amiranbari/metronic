<?php


namespace App\DB;


use App\Http\Requests\Panel\Role\StoreRequest;
use App\Http\Requests\Panel\Role\UpdateRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleRepo
{
    /**
     * @return Builder
     */
    public function get()
    {
        return Role::query();
    }

    /**
     * @param UpdateRequest $request
     */
    public function getValidate(UpdateRequest $request): void
    {
        $request->validate([
            'title' => 'unique:roles,name',
        ]);
    }

    /**
     * @param Role $role
     * @param UpdateRequest $request
     */
    public function getUpdate(Role $role, UpdateRequest $request): void
    {
        $role->update([
            'name' => $request->title
        ]);
    }

    /**
     * @param Role $role
     * @param $permissions
     */
    public function getSyncPermissions(Role $role, $permissions): void
    {
        $role->syncPermissions($permissions);
    }

    /**
     * @param Builder $roles
     * @param Request $request
     */
    public function getLike(Builder $roles, Request $request): void
    {
        $roles->where('name', 'like', '%' . $request->get('name') . '%');
    }

    /**
     * @param StoreRequest $request
     * @return Builder|Model
     */
    public function create(StoreRequest $request)
    {
        return Role::create([
            'name' => $request->title,
            'guard_name' => "web",
        ]);
    }

    /**
     * @param Model $role
     * @param $permissions
     */
    public function syncPermissions(Model $role, $permissions): void
    {
        $role->syncPermissions($permissions);
    }
}
