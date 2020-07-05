<?php

namespace App\Http\Controllers;

use App\RoomStatuses;
use Illuminate\Http\Request;

class RoomStatusesController extends Controller
{
    public function index()
    {
        $roomStatuses=RoomStatuses::get();
        return view('roomStatuses.index',compact('roomStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomStatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomStatuses $roomStatus)
    {
        $roomStatus->name = request('name');
        $roomStatus->description = request('description');

        $roomStatus->save();
        return redirect('/roomStatuses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomStatus = RoomStatuses::find($id);
        return view('roomStatuses.show',compact('roomStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomStatus = RoomStatuses::find($id);
        return view('roomStatuses.update',compact('roomStatus'));
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
        $roomStatus=RoomStatuses::find($id);
        $roomStatus->name = request('name');
        $roomStatus->description = request('description');
        $roomStatus->save();
        return redirect('/roomStatuses/'.$roomStatus->id);
    }

    public function delete(RoomStatuses $roomStatus){

        return view('roomStatuses.delete',compact('roomStatus'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomStatus = RoomStatuses::findorFail($id);
        $roomStatus->delete();
        return redirect('/roomStatuses');
    }

}
