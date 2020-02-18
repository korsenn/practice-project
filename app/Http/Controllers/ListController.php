<?php

/* --- Контроллер вывода списка участников --- */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index()
    {
        //Провераем, авторизован ли пользователь
        if (Auth::check()) 
        {
            $users = User::all();
            return view('list', compact('users'));
        }
        else return redirect()->route('login')->with('status', 'Список доступен только авторизованным пользователям!');
        // Иначе переправляем на логин с соответствующим сообщением    
    }
}
