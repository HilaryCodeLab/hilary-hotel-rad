@extends('layouts.app')


@section('title')
    Booking: Delete
    <h3>Are you sure you want to delete this?</h3>
@endsection

@section('content')
    <div class="container">
        <h3>This page will delete the booking</h3>
        <table class="table table-dark table-bordered">
            <tbody>
            <tr>
                <th class="text-center" scope="col">Booking id</th>
                <th class="text-center" scope="col">{{$booking->id}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Guest Name</th>
                <th class="text-center" scope="col">{{$booking->user->full_name}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Room</th>
                <th class="text-center" scope="col">{{$booking->room->room_number}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date created</th>
                <th class="text-center" scope="col">{{$booking->created_at}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date updated</th>
                <th class="text-center" scope="col">{{$booking->updated_at}}</th>
            </tr>
            </tbody>
        </table>

        <h5 class="mb-3">Do you want to delete this booking?</h5>

        <form action="/bookings/{{$booking->id}}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger mr-4">Yes</button>
            <a href="/bookings" class="btn btn-info mr-4">Cancel</a>
        </form>
    </div>
@endsection
