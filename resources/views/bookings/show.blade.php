@extends('layouts.app')

@section('title')
    Rates: Show individual booking
@endsection

@section('content')
    <div class="container">
        <p>This page will show individual booking</p>
        <hr>
        <form>
            <div class="form-group row">
                <label for="booking_id" class="col-sm-2 col-form-label">Booking Id</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->id}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="guest_full_name" class="col-sm-2 col-form-label">Guest Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->user->full_name}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="room" class="col-sm-2 col-form-label">Room</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->room->room_number}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="room_description" class="col-sm-2 col-form-label">Room Descriptions</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->room->descriptions}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="start_at" class="col-sm-2 col-form-label">Start At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->start_at}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="end_at" class="col-sm-2 col-form-label">End At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->end_at}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-sm-2 col-form-label">Booking Created At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->created_at}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="updated_at" class="col-sm-2 col-form-label">Booking Updated At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$booking->updated_at}}" readonly>
                </div>
            </div>
            <a href="/bookings" class="btn btn-primary"> Back </a>
{{--            <a href="/rates/delete" class="btn btn-primary"> Delete </a>--}}

        </form>
    </div>
@endsection
