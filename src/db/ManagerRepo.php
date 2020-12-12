<?php


namespace App\DB;


use App\Http\Requests\Panel\User\SetRoleRequest;
use App\Http\Requests\Panel\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerRepo
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        return User::where('level', '<', 4);
    }

    /**
     * @param $users
     * @param Request $request
     */
    public function getLike($users, Request $request): void
    {
        $users->where('name', 'like', '%' . $request->get('name') . '%');
    }

    /**
     * @param $users
     * @return mixed
     */
    public function get($users)
    {
        return $users->get();
    }

    /**
     * @param User $user
     * @param SetRoleRequest $request
     */
    public function getSyncRoles(User $user, SetRoleRequest $request): void
    {
        $user->syncRoles($request->role);
    }

    /**
     * @param User $user
     * @param $permissions
     */
    public function getSyncPermissions(User $user, $permissions): void
    {
        $user->syncPermissions($permissions);
    }

    /**
     * @param User $manager
     * @throws \Exception
     */
    public function delete(User $manager): void
    {
        $manager->delete();
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function userCreate(string $name, string $email, string $password): void
    {
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'level' => '1'
        ]);
    }
}
