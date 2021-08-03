<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapter;
use App\Models\ChapterGalleries;
use App\Models\Classes;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classes::get();
        $categories = Category::get();
        $users = User::get();

        return view('pages.detail', ['classes' => $classes, 'categories' => $categories, 'users' => $users]);
    }
    public function detail($id)
    {
        $classes = Classes::findOrFail($id);

        $chapters = Chapter::where('class_id', $id)->get();
        $categories = Category::get();
        $users = User::get();

        return view('pages.class-detail', ['classes' => $classes, 'categories' => $categories, 'users' => $users, 'chapters' => $chapters]);
    }

    public function chapter_galleries($classId, $videoId)
    {
        $videos = ChapterGalleries::where('class_id', $classId)->find($videoId);
        $classes = Classes::find($classId);


        return view('pages.chapter', ['videos' => $videos, 'classes' => $classes]);
    }

    // review

    public function store(Request $request)
    {
        // $review = Review::get();

        $data = $request->all();
        Review::create($data);
        return back();
    }

    public function review($id)
    {
        $classes = Classes::findOrFail($id);
        $chapters = Chapter::where('class_id', $id)->get();
        $categories = Category::get();
        $users = User::get();

        $reviews = Review::where('class_id', $id)->get();

        return view('pages.class_detail_review', [
            'classes' => $classes,
            'categories' => $categories,
            'users' => $users,
            'chapters' => $chapters,
            'reviews' => $reviews
        ]);
    }
}
