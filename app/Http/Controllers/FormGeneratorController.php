<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormGeneratorController extends Controller
{
    public function index()
    {
        return view('form-generator.index');
    }
    public function build()
    {
        return view('form-generator.build');
    }    
}
