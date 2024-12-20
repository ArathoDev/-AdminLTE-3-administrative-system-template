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
        if (request()->ajax()) {
            return view('dashboard.home.index')->renderSections()['content-englobal'];
        }
        return view('dashboard.home.index');
    }

}
