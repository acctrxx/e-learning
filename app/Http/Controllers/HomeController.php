<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $classes = Classes::get();
        $classesPopular = Classes::paginate(3);
        $categories = Category::paginate(2);
        $users = User::get();

        return view('pages.home', ['classes' => $classes, 'categories' => $categories, 'users' => $users, 'classesRecomend' => $classesPopular]);
    }
}
