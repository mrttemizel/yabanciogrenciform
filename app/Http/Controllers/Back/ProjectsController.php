<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view('back.pages.projects.index');     
     }
 
     public function create(){
         return view('back.pages.projects.create'); 
     }

     

 
     public function edit(){
         return view('back.pages.projects.edit'); 
     }
}
