<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorConroller extends Controller
{
    //
    public function index()
    {
        return view('admin.editor');
    }
}
