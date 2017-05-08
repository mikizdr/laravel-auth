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
    }

    public function index()
    {
        return view('admin.editor');
    }
}
