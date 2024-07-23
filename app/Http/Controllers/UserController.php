<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getuser () {
        $users = User::all();
        
        return $users;
    }

    public function adduser (Request $request) {
        $user = new User();
    }
}
