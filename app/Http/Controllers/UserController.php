<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('pages.admin.users.index', compact('data'));
    }

    public function create()
    {
        return view('pages.admin.users.create');
    }

    public function store(Request $request)
    {
        $data = request()->all();
        $data['image'] = $request->file('image')->store('assets/user', 'public');
        User::create($data);
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $data = User::findorfail($id);
        return view('pages.admin.users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/user', 'public');
        $item = User::findOrFail($id);
        $item->update($data);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $data = User::findorfail($id);
        $data->delete();
        $this->removeImage($data->image);
        return back();
    }

    public function removeImage($image)
    {
        if (file_exists($image)) {
            unlink('storage/' . $image);
        }
    }

}
