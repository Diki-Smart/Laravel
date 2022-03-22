<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) 
    {
        $users = [
            "1" => "John",
            "2" => "Janna",
            "3" => "Jabio" 
        ];
        if (!array_key_exists($id, $users))
        return "L'user $id n'existe pas.";
        return view('user' , [
            'name' => $users[$id]
        ]);
    }
    public function index() {
        return view('users' , ['users' => [
            "1" => "John",
            "2" => "Janna",
            "3" => "Jabio" 
        ]]);
    }
}
