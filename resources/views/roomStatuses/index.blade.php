@extends('layouts.app')

@section('title')
    Room Statuses: Show list of Room Statuses
@endsection

@section('content')
    <div class="container">
        <p>This page will show list of Room Statuses</p>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roomStatuses as $roomStatus)
                <tr>
                    <th scope="row">{{$roomStatus->id}}</th>
                    <td><a href="/roomStatuses/{{$roomStatus->id}}/edit">{{$roomStatus->name}}</a></td>
                    <td>{{$roomStatus->description}}</td>
                    <td>{{$roomStatus->created_at}}</td>
                    <td>{{$roomStatus->updated_at}}</td>
                    <td>
                        <a href="/roomStatuses/{{$roomStatus->id}}/edit" class="btn btn-warning">Update</a>
                        <a href="{{route('roomStatuses.delete', $roomStatus)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

