<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


use App\Models\User;

class UserApiController extends BaseController
{
    public function showAll()
    {
        return User::all();
    }

    public function update(User $user)
    {
        request()->validate([
            'FullName' => 'required',
            'Username' => 'required',
        ]);

        $success = $user->update([
            'fullName' => request('FullName'),
            'username' => request('Username'),
            'title' => request('Title'),
            'email' => request('Email'),
            'address' => request('Address'),
            'phone' => request('Phone'),
            'profile' => request('profile'),
            'expYear' => request('ExpYear'),
            'github' => request('github'),
            'linked_in' => request('linked_in'),
            'my_site' => request('my_site'),
            'behance' => request('behance')
        ]);

        return [
            'success' => $success
        ];
    }
}
