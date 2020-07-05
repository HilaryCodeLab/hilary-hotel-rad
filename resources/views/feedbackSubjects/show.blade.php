@extends('layouts.app')

@section('title')
    Feedback Subjects: Show individual Feedback Subject
@endsection

@section('content')
    <div class="container">
        <p>This page will show individual Feedback Subject</p>
        <hr>
        <form>
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$feedbackSubject->id}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="rate" class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" maxlength="25" value="{{$feedbackSubject->subject}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" maxlength="255" readonly>{{$feedbackSubject->description}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-sm-2 col-form-label">Created At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$feedbackSubject->created_at}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="updated_at" class="col-sm-2 col-form-label">Updated At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$feedbackSubject->updated_at}}" readonly>
                </div>
            </div>
            <a href="/feedbackSubjects" class="btn btn-primary"> Back </a>
            <a href="/feedbackSubjects/delete" class="btn btn-primary"> Delete </a>

        </form>
    </div>
@endsection
