<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;

class RatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->has('room_type')){
            $rates = Rate::where('room_type',request('room_type'))
                ->paginate(5);
        }
        else{
            $rates=Rate::paginate(5);
        }

        return view('rates.index',compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Rate $rate)
    {
        $rate->rate = request('rate');
        $rate->room_type = request('room_type');
        $rate->description = request('description');

        $rate->save();
        return redirect('/rates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rate = Rate::find($id);
        return view('rates.show',compact('rate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rate = Rate::find($id);
        return view('rates.update',compact('rate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $rate=Rate::find($id);
        $rate->rate = request('rate');
        $rate->description = request('description');
        $rate->save();
        return redirect('/rates/'.$rate->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Rate $rate){

        return view('rates.delete',compact('rate'));
    }

//    public function destroy(Rate $rate,$id)
//    {
//        $rate->Rate::findorFail($id);
//        $rate->delete();
//        return 204;
//        return view('rates.delete');
//    }

    public function destroy($id)
    {
        $rate = Rate::findorFail($id);
        $rate->delete();
        return redirect('/rates');
    }
}
