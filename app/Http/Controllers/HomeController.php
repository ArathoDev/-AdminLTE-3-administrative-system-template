<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @method array renderSections()
 */

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index');
    }

}
