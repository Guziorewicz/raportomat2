<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
 /*   public function index(){
        $role=Auth::user()->role;
        $lista = DB::table('users')->get()->where('role', "0");
        
        if ($role=='1'){
            
            return view('admin.dashboard',['lista'=>$lista]);
        } else {
            
            
            return view ('dashboard',['lista'=>$lista]);
        }
    }*/

}
