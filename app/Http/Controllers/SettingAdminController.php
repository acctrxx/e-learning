<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingAdminController extends Controller
{
    public function account()
    {
        $data = Auth::user();
        return view('pages.admin.setting', compact('data'));
    }

    public function update(Request $request, $redirect)
    {
        $data = request()->all();
        $data['image'] = $request->file('image')->store('assets/user', 'public');
        $item = Auth::user();
        $item->update($data);
        return redirect()->route($redirect);
    }
}
