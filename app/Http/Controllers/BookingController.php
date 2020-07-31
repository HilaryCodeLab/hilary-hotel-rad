<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\StoreBookingsRequest;
use App\Http\Requests\UpdateBookingsRequest;
use App\User;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookingController extends Controller
{
    public function index(){
        if (request('show_deleted') == 1) {
            $bookings = Booking::onlyTrashed()->get();
        }
        else {
            $bookings = Booking::all();
        }

        return view('bookings.index', compact('bookings'));
    }

    public function create(){

        $users = User::get()->pluck('full_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $rooms = Room::get()->pluck('room_number', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('bookings.create', compact('users', 'rooms'));
    }

    public function store(StoreBookingsRequest $request)
    {
//        if (!Gate::allows('booking_create')) {
//            return abort(401);
//        }
        $booking = Booking::create($request->all());

        return redirect()->route('bookings.index');

    }

    public function show($id){
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }


    public function edit($id){

        $users = User::get()->pluck('given_name','id')->prepend('Please select','');
        $rooms = Room::get()->pluck('room_number','id')->prepend('Please select','');
        $booking = Booking::findOrFail($id);
        return view('bookings.update',compact('booking','users','rooms'));

    }

    public function update(UpdateBookingsRequest $request, $id){
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
        return redirect()->route('bookings.index');
    }


    public function delete(Booking $booking){
        return view('bookings.delete',compact('booking'));
    }

    public function destroy($id){
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect('/bookings');
    }


}
