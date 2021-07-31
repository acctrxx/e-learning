<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        $users = User::all();
        return view('pages.admin.categories.index', compact('data', 'users'));
    }

    public function create()
    {
        $data = Category::all();
        return view('pages.admin.categories.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image'
        ]);
        $image = $request->file('photo');
        $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        $request->merge([
            'photo' => $new_name_image
        ]);
        $data = request()->all();
        $data['slug'] = Str::slug($request->name);
        Category::create($data);
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $data = Category::findorfail($id);
        return view('pages.admin.categories.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Category::find($id);

        $request->validate([
            'name' => 'required',
        ]);

        $data->update($request->all());
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
    $data = Category::findorfail($id);
        $data->delete();
        return back();
    }

    public function uploadImage($image)
    {
        $new_name_image = time() . '.' .  $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
    }

    public function removeImage($image)
    {
        if (file_exists($image)) {
            unlink('profile/' . $image);
        }
    }
}
