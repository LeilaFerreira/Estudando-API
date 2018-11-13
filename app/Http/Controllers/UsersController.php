<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function create(Request $request){
           
            $users =  Users::create([
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'password'=> $request->input('password')
            ]);
            $users->save();

    }

    public function listarUsuarios(){}
    public function editarUsuarios(Request $request){}
    public function excluirUsuarios(Request $request){}
               
}
