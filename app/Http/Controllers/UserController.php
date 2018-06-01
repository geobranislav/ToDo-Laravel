<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserTodos(User $user)   
    {   
         $user = Auth::user();  
         return $todos = $user->todos()->get();
    }
}
