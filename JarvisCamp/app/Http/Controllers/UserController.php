<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [
            "title" => "Tables",
            'users' => User::all(),
            'posts' => Posts::all(),
        ];
    
        return view('Contents.tables', $data);
    }
}
