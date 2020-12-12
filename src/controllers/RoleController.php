<?php

namespace App\Http\Controllers\Panel;

use App\DB\PermissionRepo;
use App\DB\RoleRepo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\Role\StoreRequest;
use App\Http\Requests\Panel\Role\UpdateRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    /**
     * @var RoleRepo|Application|mixed
     */
    private $roleRepo;
    /**
     * @var PermissionRepo|Application|mixed
     */
    private $permissionRepo;

    public function __construct()
    {
        $this->roleRepo = resolve(RoleRepo::class);
        $this->permissionRepo = resolve(PermissionRepo::class);
    }

    public function index(Request $request)
    {
        $roles = $this->roleRepo->get();

        if ($request->get('name'))
            $this->roleRepo->getLike($roles, $request);

        $roles = $roles->get();

        return view('panel.roles.index', [
            'page_title'        =>  'نقش ها',
            'page_description'  =>  ' - در این قسمت میتوانید نقش ها را مشاهده کنید',
            'roles'             =>  $roles
        ]);
    }

    public function show(Role $role)
    {
        $permissions = $this->permissionRepo->get();

        return view('panel.roles.show', [
            'permissions'   =>  $permissions,
            'role'          =>  $role,
            'page_title'        =>  'دسترسی ها',
            'page_description'  =>  ' - در این قسمت میتوانید دسترسی های یک نقش را مشاهده کنید',
        ]);
    }

    public function update(Role $role, UpdateRequest $request)
    {
        if ($role->name != $request->title)
            $this->roleRepo->getValidate($request);

        $permissions = $request->input('permissions');

        $this->roleRepo->getUpdate($role, $request);
        $this->roleRepo->getSyncPermissions($role, $permissions);

        toastr()->info('عملیات با موفقیت انجام شد');

        return back();
    }

    public function create()
    {
        $permissions = $this->permissionRepo->get();


        return view('panel.roles.create', [
            'permissions'   =>  $permissions,
            'page_title'        =>  'ایجاد نقش',
            'page_description'  =>  ' - در این قسمت میتوانید نقش جدید اضافه کنید',
        ]);
    }

    public function store(StoreRequest $request)
    {
        $permissions = $request->input('permissions');

        $role = $this->roleRepo->create($request);

        $this->roleRepo->syncPermissions($role, $permissions);

        return back()->with(['success' => "ایجاد نقش با موفقیت انجام شد"]);
    }




}
