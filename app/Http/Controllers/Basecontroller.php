<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basecontroller extends Controller
{
    // 
    function index() 
    { 
        return('welcome');
    }
}
