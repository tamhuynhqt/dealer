<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Image;
use App\Body;

class CarCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::all();
        return view('car.index', compact('cars'))->with('i',($request->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bodies = Body::getNames();
        return view('car.create')->with('bodies',$bodies);
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
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'vin' => 'required',
            'tranmission' => 'required',
            'series' => 'required',
            'color' => 'required',
            'fuel_type' => 'required',
        ]);
       // dd($request);
        $image = new Image;
        $image->featured = $request->file('featured')->store('featured');
        $image->save();
        // Car::create($request->only('make','model','year','vin','tranmission','series','color','fuel-type','status,odometer'));
        // $body_id = Body::getIdByName($request->query('body_name'));
        $filter = $request->except('featured');
      
        $car = new Car($filter);
        $car->image()->associate($image);
        $car->save();
        return redirect()->route('car.index') ->with('success','Car created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car= Car::find($id);
        return view('car.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car= Car::find($id);
        return view('car.edit',compact('car'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Car::find($id)->update($request->all());
        return redirect()->route('car.index') ->with('success','Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::find($id)->delete();
        return redirect()->route('car.index') ->with('success','Car deleted successfully');
    }
}
