<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function auth(Request $request){
        $page = "dashboard";
        return view('dashboard', compact('request','page'));
    }

    public function page(Request $request, $page){
        switch($page){
            case 'dashboard' : 
                return view ('dashboard', compact('request', 'page'));
            break;
            case 'custormers' : 
                return view ('custormers', compact('request', 'page'));
            break;
            case 'projects' : 
                return view ('projects', compact('request', 'page'));
            break;
            case 'orders' : 
                return view ('orders', compact('request', 'page'));
            break;
            case 'inventory' : 
                return view ('inventory', compact('request', 'page'));
            break;
            case 'accounts' : 
                return view ('accounts', compact('request', 'page'));
            break;
            case 'tasks' : 
                return view ('tasks', compact('request', 'page'));
            break;
                default : return view('dashboard', compact('request', 'page'));
            break;
        }
    }
}
