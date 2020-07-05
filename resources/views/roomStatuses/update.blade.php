@extends('layouts.app')

@section('title')
    Room Statuses: Update
@endsection

@section('content')
    <div class="container">
        <p>This page will update the Room Statuses</p>
        <form method="POST" action="/roomStatuses/{{$roomStatus->id}}">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input
                        type="number"
                        readonly class="form-control-plaintext"
                        id="id"
                        name="id"
                        value="{{$roomStatus->id}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="subject" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input
                        required="required"
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        maxlength="25"
                        value="{{$roomStatus->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control"
                              required="required"
                              type="text"
                              id="description"
                              name="description"
                              rows="3"
                              maxlength="255">{{$roomStatus->description}}
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="btnEdit">Edit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
