<?php

namespace App\Http\Controllers\Panel;

use App\DB\ManagerRepo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    const TITLE = 'لیست مدیران';
    const DESCRIPTION = '- در این قسمت میتوانید لیست مدیران را مشاهده کنید';

    public function __construct()
    {
        $this->managerRepo = resolve(ManagerRepo::class);
    }

    public function index(Request $request)
    {
        $users = $this->managerRepo->getAll();

        if ($request->get('name'))
            $this->managerRepo->getLike($users, $request);

        $users = $this->managerRepo->get($users);

        return view('panel.users.managers.index', [
            'page_description' => self::DESCRIPTION,
            'page_title' => self::TITLE,
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('panel.users.managers.create');
    }

    public function store(StoreRequest $request)
    {
        $this->managerRepo->userCreate($request->name, $request->email, $request->password);

        return back()->with('success', 'مدیریت با موفقیت اضافه شد');
    }

    public function destroy(User $manager)
    {
        $this->managerRepo->delete($manager);

        toastr()->success('مدیریت با موفقیت حذف شد');
        return back();
    }




}
