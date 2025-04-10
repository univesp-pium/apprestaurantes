<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('admin.dashboard.index');
    }
}
