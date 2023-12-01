<?php

namespace App\Http\Controllers\AdminEvent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin-event.pages.dashboard.index');
    }
}
