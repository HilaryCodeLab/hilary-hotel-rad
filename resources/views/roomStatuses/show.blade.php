@extends('layouts.app')

@section('title')
    Room Statuses: Show individual Room Statuses
@endsection

@section('content')
    <div class="container">
        <p>This page will show individual Room Statuses</p>
        <hr>
        <form>
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$roomStatus->id}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" maxlength="25" value="{{$roomStatus->name}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" maxlength="255" readonly>{{$roomStatus->description}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-sm-2 col-form-label">Created At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$roomStatus->created_at}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="updated_at" class="col-sm-2 col-form-label">Updated At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$roomStatus->updated_at}}" readonly>
                </div>
            </div>
            <a href="/roomStatuses" class="btn btn-primary"> Back </a>
            <a href="/roomStatuses/delete" class="btn btn-primary"> Delete </a>

        </form>
    </div>
@endsection
