<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\food;
use App\Models\booktb;

class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        return view("home",compact("data"));
    }
    public function redirects()
    {
       $usertype= Auth::user()->usertype;
       if ($usertype=='1')
       {
           return view("admin.adminhome");
       }
       else{
           return view('home');
       }
    }
}