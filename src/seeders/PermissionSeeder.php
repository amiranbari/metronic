<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'GET-/panel',
                'display_name' => 'داشبورد',
            ],
            [
                'name' => 'GET-/panel/managers',
                'display_name' => 'لیست مدیران',
            ],
            [
                'name' => 'DELETE-/panel/managers/{manager}',
                'display_name' => 'حذف مدیر',
            ],
            [
                'name' => 'GET-/panel/users/{user}/permissions',
                'display_name' => 'فرم دسترسی کاربر',
            ],
            [
                'name' => 'POST-/panel/users/{user}/permissions',
                'display_name' => 'دستسری کاربر',
            ],
            [
                'name' => 'POST-/panel/users/{user}/roles',
                'display_name' => 'نقش کاربر',
            ],
            [
                'name' => 'GET-/panel/roles',
                'display_name' => 'لیست نقش ها',
            ],
            [
                'name' => 'GET-/panel/roles/create',
                'display_name' => 'فرم ایجاد نقش',
            ],
            [
                'name' => 'POST-/panel/roles',
                'display_name' => 'ایجاد نقش',
            ],
            [
                'name' => 'GET-/panel/roles/{role}',
                'display_name' => 'فرم ویرایش نقش',
            ],
            [
                'name' => 'PUT-/panel/roles/{role}',
                'display_name' => 'ویرایش نقش',
            ],
            [
                'name' => 'GET-/panel/managers/create',
                'display_name' => 'فرم افزودن مدیر',
            ],
            [
                'name' => 'POST-/panel/managers',
                'display_name' => 'افزودن مدیر',
            ],
        
        ]);
    }
}
