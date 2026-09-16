<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SlashController extends Controller
{
   public function index(Request $request)
   {

      if (auth()->check()) {
         return auth()->user()->role === 'is_admin' 
             ? redirect('/admin-login') 
             : redirect('/user-login');
     }

     $knownRole = $request->cookie('htg_user_role'); 

        if ($knownRole === 'admin') {
            return redirect('login');
        }

        if ($knownRole === 'employee') {
            return redirect('user-login');
        }
      return view('pages.slash');
   }
}
