<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUserTodos(User $user)   
    {   
         $user = Auth::user();  
         return $todos = $user->todos()->get();
    }
}
