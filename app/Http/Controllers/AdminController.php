<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index($pagename,$data){
        return  view($pagename,$data); 
   }
   public function dashboard(){ 
     dd();
        $data['title']='Dashboard';
        $pagename="admin.pages.dashboard";
        return $this->index($pagename,$data);
   }
}
