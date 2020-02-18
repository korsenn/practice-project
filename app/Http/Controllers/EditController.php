<?php

/* --- Контроллер редактирования --- */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Rules\MatchOldPassword; //Правило для валидации. Hash::check введенный пароль с существующим
use App\User;

class EditController extends Controller
{
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }
    public function update(User $user) 
    {    
        /* MatchOldPassword - проверка на введенный действительный пароль */
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255 '],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.($user->id)],
            'bdate' => ['required', 'date'],
            'gender' => ['required'],
            'orgname' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'nation' => ['required', 'string', 'max:255'],      
            'oldpassword' => [ 'nullable', 'required_with:password', new MatchOldPassword ], // валидация только если одно из...
            'password' => [ 'nullable', 'required_with:oldpassword', 'min:6', 'confirmed'], // полей заполнено       
        ]);

        $data['gender'] = $data['gender'] == 'Мужской' ? 'm' : 'f'; // делаем m или f для enum
        $user->update(array_filter($data)); // убираем пустые значения, т.к пароль можно не менять 

        return redirect()->route('edit', $user->id)->with('status', 'Профиль отредактирован!');
    }
}
