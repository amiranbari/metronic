<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = 'داشبورد';
        $page_description = 'داشبورد';

        return view('pages.dashboard', compact('page_title', 'page_description'));
    }
}
