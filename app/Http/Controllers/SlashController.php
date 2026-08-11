<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlashController extends Controller
{
   public function index(){
    return view('pages.slash');
   }
}
