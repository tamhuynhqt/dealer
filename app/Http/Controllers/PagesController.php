<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index($slug)
    {
        // dd($slug);
        // $getView = str_replace($slug,'-','_');
        return view("layouts.{$slug}");
    }
    
    public function home()
    {
        return view('welcome1');
    }
}
