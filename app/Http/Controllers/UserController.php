<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request) {
        // Menampilkan profil user + tutorial + comment
//        $user=$request->user();
//        $profil=$user::with('tutorials', 'comments')->where('id', $user->id)->first();    //eager loading
//        
//        return $profil;
        
        // Menampilkan profil user
        return $request->user();
    }
}
