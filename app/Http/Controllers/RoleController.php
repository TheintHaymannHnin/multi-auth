<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Role;

class RoleController extends Controller
{   
       
    public function construct(){
        $this->middleware('isManagerOrSupervisor');
    }
    public function index()
    {   
        
        $roles=Role::all();
        return view('back.role.index',compact('roles'));

    }
}
