<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // получаем текущего авторизованного пользователя

        return view('profile.show', ['user' => $user]);
    }
}
