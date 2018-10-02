<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    
        $users = [
        ];

        $title = 'Listado de usuarios';

        return view('users', compact('users', 'title'));
    }
}
