<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('pages.admin.dashboard', compact('data'));
    }
}
