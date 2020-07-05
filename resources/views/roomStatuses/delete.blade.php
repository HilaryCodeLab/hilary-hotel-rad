@extends('layouts.app')


@section('title')
    Room Statuses: Delete
    <h3>Are you sure you want to delete this?</h3>
@endsection

@section('content')
    <div class="container">
        <h3>This page will delete the Room Statuses</h3>
        <table class="table table-dark table-bordered">
            <tbody>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">{{$roomStatus->id}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Subject</th>
                <th class="text-center" scope="col">{{$roomStatus->name}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Description</th>
                <th class="text-center" scope="col">{{$roomStatus->description}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date created</th>
                <th class="text-center" scope="col">{{$roomStatus->created_at}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date updated</th>
                <th class="text-center" scope="col">{{$roomStatus->updated_at}}</th>
            </tr>
            </tbody>
        </table>

        <h5 class="mb-3">Do you want to delete this feedback subject?</h5>

        <form action="/roomStatuses/{{$roomStatus->id}}" method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger mr-4">Yes</button>
            <a href="/roomStatuses" class="btn btn-info mr-4">Cancel</a>
        </form>
    </div>
@endsection
