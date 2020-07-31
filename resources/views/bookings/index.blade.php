@extends('layouts.app')

@section('title')
    Bookings: Show list of Bookings
@endsection

@section('content')
    <div class="container">
        <p>This page will show list of Bookings</p>
        <p><a href="{{route('bookings.create')}}" class="btn btn-success">Create new</a></p>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Customer</th>
                <th scope="col">Room</th>
                <th scope="col">Start At</th>
                <th scope="col">End At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <th scope="row">{{$booking->id}}</th>
                    <td>{{$booking->user->full_name}}</td>
                    <td>{{$booking->room->room_number}}</td>
                    <td>{{$booking->start_at}}</td>
                    <td>{{$booking->end_at}}</td>
                    <td>
                        <a href="/bookings/{{$booking->id}}" class="btn btn-info">Details</a>
                        <a href="{{route('bookings.edit',[$booking->id])}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('bookings.delete',$booking)}}" class="btn btn-danger">Delete</a>
{{--                        <a href="/bookings/{{$booking->id}}/edit" class="btn btn-warning">Update</a>--}}
{{--                        <a href="{{route('rates.delete', $booking)}}" class="btn btn-danger">Delete</a>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        {{$bookings->links()}}--}}
    </div>
@endsection

