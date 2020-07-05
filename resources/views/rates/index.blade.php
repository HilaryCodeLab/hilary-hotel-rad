@extends('layouts.app')

@section('title')
    Rates: Show list of rates
@endsection

@section('content')
    <div class="container">
        <p>This page will show list of rates</p>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Rate</th>
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
    </div>
@endsection

