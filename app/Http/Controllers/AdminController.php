<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index($pagename,$data){
        return  view('admin.page.dashboard'); 
   }
}
