<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
   function index(){
       //return "Users";
       $user = new User();
       $user-> name = 'Belana';
       $user-> email = 'belatorres@hotmail.com';
      // $user->password
       return response()->json([$user], status:200);
   }
}
