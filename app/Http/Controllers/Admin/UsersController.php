<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.user.index')->with(['card_title'=>'لیست کاربران']);

    }

    public function create()
    {
        return view('admin.user.create')->with(['card_title'=>'ثبت کاربر']);

    }

    public function store(UserStoreRequest $request)
    {
        $user_data=[
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'wallet' => $request->get('wallet'),
            'role' => $request->get('role'),
        ];
        User::create($user_data);
        }
}
