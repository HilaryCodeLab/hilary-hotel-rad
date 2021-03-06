@extends('layouts.app')

@section('title')
    Room Statuses: Create
@endsection

@section('content')
    <div class="container">
        <p>This page will create Room Statuses</p>
        <form method="POST" action="/roomStatuses">
            @csrf
            <div class="form-group row">
                <label for="subject" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input
                        required="required"
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        maxlength="16"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input
                        required="required"
                        type="text"
                        class="form-control"
                        id="description"
                        name="description"
                        maxlength="255"
                        value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">OK</button>
                </div>
            </div>
        </form>
    </div>
@endsection
