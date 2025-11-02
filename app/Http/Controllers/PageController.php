<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    function index() 
    {
        echo "This is Page Controller";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='logout'>Logout</a>";
    }
}
