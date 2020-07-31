@extends('layouts.app')

@section('title')
    Feedback Subjects: Show list of Feedback Subjects
@endsection

@section('content')
    <div class="container">
        <p>This page will show list of Feedback Subjects</p>

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
            @foreach($feedbackSubjects as $feedbackSubject)
                <tr>
                    <th scope="row">{{$feedbackSubject->id}}</th>
                    <td><a href="/feedbackSubjects/{{$feedbackSubject->id}}/edit">{{$feedbackSubject->subject}}</a></td>
                    <td>{{$feedbackSubject->description}}</td>
                    <td>{{$feedbackSubject->created_at}}</td>
                    <td>{{$feedbackSubject->updated_at}}</td>
                    <td>
                        <a href="/feedbackSubjects/{{$feedbackSubject->id}}/edit" class="btn btn-warning">Update</a>
                        <a href="{{route('feedbackSubjects.delete', $feedbackSubject)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

