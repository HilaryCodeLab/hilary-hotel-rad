@extends('layouts.app')

@section('title')
    Rates: Show list of rates
@endsection

@section('content')
    <div class="container">
        <p>This page will show list of rates</p>
        <h6 class="font-weight-bold">Filter:</h6>
        <a href="{{route('rates.index')}}/?room_type=Single"><span class="badge-pill badge-primary">Single</span></a>
        <a href="{{route('rates.index')}}/?room_type=Double"><span class="badge-pill badge-primary">Double</span></a>
        <a href="{{route('rates.index')}}/?room_type=Executive"><span class="badge-pill badge-primary">Executive</span></a>
        <a href="{{route('rates.index')}}/?room_type=Hollywood"><span class="badge-pill badge-primary">Hollywood</span></a>
        <a href="{{route('rates.index')}}/?room_type=Princess"><span class="badge-pill badge-primary">Princess</span></a>
        <a href="{{route('rates.index')}}/?room_type=President"><span class="badge-pill badge-primary">President</span></a>
        <a href="{{route('rates.index')}}"><span class="badge-pill badge-dark">Reset</span></a>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Rate</th>
                <th scope="col">Room Type</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rates as $rate)
                <tr>
                    <th scope="row">{{$rate->id}}</th>
                    <td><a href="/rates/{{$rate->id}}/edit">{{$rate->rate}}</a></td>
                    <td>{{$rate->room_type}}</td>
                    <td>{{$rate->description}}</td>
                    <td>{{$rate->created_at}}</td>
                    <td>{{$rate->updated_at}}</td>
                    <td>
                        <a href="/rates/{{$rate->id}}/edit" class="btn btn-warning">Update</a>
                        <a href="{{route('rates.delete', $rate)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$rates->links()}}
    </div>
@endsection

