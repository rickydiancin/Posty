<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class LogController extends Controller
{
     public function index()
    {
        return view('auth.register');
    }
}
