<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // middleware auth is assigned in Kernel.php
        $this->middleware('auth:admin');
        $this->middleware('editor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {
        return view('admin.editor');
    }
}
