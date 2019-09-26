<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //注册
    public function create()
    {
        return view('users.create');
    }

    //显示用户个人信息的页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //创建用户
    public function store(Request $request)
    {
        /**
         * required：存在性验证
         * max，min：长度验证
         * unique：唯一性验证
         * confirmed：密码匹配验证
         */
        $this->validate($request, [
            'name'     => 'required|max:50',
            'email'    => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
        return;
    }

}
