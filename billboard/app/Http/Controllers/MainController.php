<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billboard;
use App\User;

class MainController extends Controller
{
    function index(){
        $Billboard = Billboard::with('User')->get();
        
        return view('index', compact('Billboard'));
    }
}
