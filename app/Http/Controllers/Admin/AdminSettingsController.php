<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateSettings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminSettingsController extends Controller
{
    public function index()
    {
        return view('admin/dashboard/index');
    }

    public function update(UpdateSettings $request)
    {

        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->input('name');
        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Zmiany zostały zapisane',
            ]
        ]);
    }
}
