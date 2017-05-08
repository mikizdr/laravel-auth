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
        // allow admin role to go to admin/test page
        $this->middleware('editor', ['except' => 'test']);
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

    /**
     * Show the test page.
     *
     * @return \Illuminate\Http\Response
     */    
    public function test()
    {
        return view('admin.test');
    }
}
