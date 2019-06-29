<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        /* $this->middleware('roles:Administrateur|Gestionnaire|Comptable');
        $this->middleware('roles:Gestionnaire');
        $this->middleware('roles:Agent');
 */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layout.default');
       // return view('home');
    }
}
