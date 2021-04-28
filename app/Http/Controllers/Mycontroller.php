<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function index()
    {
        $no_of_user = User::count();
        return "No user : {$no_of_user}<br>";
    }
}
