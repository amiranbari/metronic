<?php

namespace App\Http\Controllers\Panel;

use App\DB\ManagerRepo;
use App\DB\PermissionRepo;
use App\DB\RoleRepo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\User\SetPermissionRequest;
use App\Http\Requests\Panel\User\SetRoleRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;

class UserController extends Controller
{

    const TITLE = 'دسترسی کاربر';
    const DESCRIPTION = ' - در این قسمت میتوانید دسترسی های کاربر را مشاهده کنید';

    /**
     * @var PermissionRepo|Application|mixed
     */
    private $permissionRepo;
    /**
     * @var RoleRepo|Application|mixed
     */
    private $roleRepo;
    /**
     * @var ManagerRepo|Application|mixed
     */
    private $managerRepo;


    public function __construct()
    {
        $this->permissionRepo = resolve(PermissionRepo::class);
        $this->roleRepo = resolve(RoleRepo::class);
        $this->managerRepo = resolve(ManagerRepo::class);
    }


    public function permissions(User $user)
    {
        $permissions = $this->permissionRepo->get();
        $roles = $this->roleRepo->get()->get();

        return view('panel.users.permissions.show', [
            'user'              =>  $user,
            'roles'             =>  $roles,
            'permissions'       =>  $permissions,
            'page_title'        =>  self::TITLE,
            'page_description'  =>  self::DESCRIPTION
        ]);
    }

    public function setRoles(SetRoleRequest $request, User $user)
    {
        if ($request->role)
            $this->managerRepo->getSyncRoles($user, $request);

        toastr()->success('نقش با موفقیت ذخیره شد');

        return back();
    }

    public function setPermissions(SetPermissionRequest $request, User $user)
    {
        $permissions = $request->input('permissions');
        $this->managerRepo->getSyncPermissions($user, $permissions);

        toastr()->success('ذخیره سازی دسترسی با موفقیت انجام شد');

        return back();

    }


}
