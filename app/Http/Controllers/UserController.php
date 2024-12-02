<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function register(Request $request) {
        $payload = $request->validate([
            'name' => ["required"],
            'email' => ["required"],
            'password' => ["required"]
        ]);

        $resp = User::create($payload);

        return $resp;
    }


    function getUser($id) {

        $user = User::find($id);

        if (!$user) {
            return "User not found";
        }

        return $user;
    }


    function updateUser(Request $request, $id) {
        
        $user = User::find($id);

        if (!$user) {
            return "User not found";
        }

        $payload = $request->validate([
            'name' => ["required"],
            'email' => ["required", "email"],
            'password' => ["required", "min:5"]
        ]);

        $user->update($payload);

        return "User is updated";
    }

    function deleteUser($id) {
        $user = User::find($id);

        if (!$user) {
            return "User not found";
        }

        return "User is deleted";
    }
}
