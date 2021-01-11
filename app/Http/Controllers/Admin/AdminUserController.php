<?php

namespace App\Http\Controllers\Admin;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin/dashboard/tables/users-table', ['users' => $users]);
    }

    public function showUser($user_id)
    {
        $user = User::findOrFail($user_id);

        return view('admin.dashboard.tables.show-user-table', compact('user'));
    }


}
