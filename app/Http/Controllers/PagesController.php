<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class PagesController extends Controller
{
    public function index($slug)
    {
        // dd($slug);
        // $getView = str_replace($slug,'-','_');
        return view("layouts.{$slug}");
    }

    public function contact(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        ContactUs::create($request->all());
        return back()->with('success','Your message is received. Thank you for contacting us');
    }
    public function home()
    {
        return view('welcome1');
    }
}
