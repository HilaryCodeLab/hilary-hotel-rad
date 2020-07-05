@extends('layouts.app')


@section('title')
    Rates: Delete
    <h3>Are you sure you want to delete this?</h3>
@endsection

@section('content')
    <div class="container">
        <h3>This page will delete the rates</h3>
        <table class="table table-dark table-bordered">
            <tbody>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">{{$rate->id}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Description</th>
                <th class="text-center" scope="col">{{$rate->description}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Rate</th>
                <th class="text-center" scope="col">&#36; {{$rate->rate}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date created</th>
                <th class="text-center" scope="col">{{$rate->created_at}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date updated</th>
                <th class="text-center" scope="col">{{$rate->updated_at}}</th>
            </tr>
            </tbody>
        </table>

        <h5 class="mb-3">Do you want to delete this rate?</h5>

        <form action="/rates/{{$rate->id}}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger mr-4">Yes</button>
            <a href="/rates" class="btn btn-info mr-4">Cancel</a>
        </form>
    </div>
@endsection
