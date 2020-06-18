<?php

namespace App\Http\Controllers\api\v1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     public function getAllUsers()
    {
        $users = User::with('roles')->get();
        return response()->json([
            'users' => $users,
        ],200);
    }
}
