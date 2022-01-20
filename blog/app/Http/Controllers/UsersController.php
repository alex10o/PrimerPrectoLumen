<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
   function index(){
       //return "Users";
      // $user = new User();
      // $user-> name = 'Belana';
      // $user-> email = 'belatorres@hotmail.com';
      // $user->password
      $users = User::all();
       return response()->json([$users], status:200);
   }
}
