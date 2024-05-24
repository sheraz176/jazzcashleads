<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TsmController extends Controller
{
    public function Deshbaord_index()
    {
        return view('main_site.home.index');
    }
    public function create()
    {
        return view('main_site.tsm.create');
    }
}
