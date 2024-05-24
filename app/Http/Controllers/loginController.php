<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function main_login()
    {
        return view('main_site.auth.login');
    }
}
