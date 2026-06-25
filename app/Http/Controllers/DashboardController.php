<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalUsers' => 0,
            'totalProjects' => 0,
            'activeTasks' => 0,
            'notifications' => 0,
            'projects' => [],
            'activities' => []
        ]);
    }
}