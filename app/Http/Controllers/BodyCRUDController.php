<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Body;

class BodyCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
       $bodies = Body::all();
        return view('car.body.index',compact('bodies'))->with('i',($request->input('page',1)-1)*5);
      // return view('car.body.index',compact('bodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.body.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'seats' => 'required',
            'doors' => 'required',
            'engine_type' => 'required',
            'engine_size' => 'required',
            'cylinders' => 'required',
            'power' => 'required',
        ]);
        Body::create($request->all());
        return redirect()->route('body.index') ->with('success','Car body created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $body= Body::find($id);
        return view('car.body.show',compact('body'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $body= Body::find($id);
        return view('car.body.edit',compact('body'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'seats' => 'required',
            'doors' => 'required',
            'engine_type' => 'required',
            'engine_size' => 'required',
            'cylinders' => 'required',
            'power' => 'required',
        ]);
        Body::find($id)->update($request->all());
        return redirect()->route('body.index') ->with('success','Body updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Body::find($id)->delete();
        return redirect()->route('body.index') ->with('success','Body deleted successfully');
    }
}
