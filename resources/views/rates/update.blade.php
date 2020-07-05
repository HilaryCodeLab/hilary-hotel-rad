@extends('layouts.app')

@section('title')
    Rates: Update
@endsection

@section('content')
    <div class="container">
        <p>This page will update the rates</p>
        <form method="POST" action="/rates/{{$rate->id}}">
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
                        value="{{$rate->id}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="rate" class="col-sm-2 col-form-label">Rate</label>
                <div class="col-sm-10">
                    <input
                        type="number"
                        required="required"
                        class="form-control"
                        id="rate"
                        name="rate"
                        placeholder="$$$"
                        min="0.00"
                        max="99999.99"
                        step="0.01"
                        value="{{$rate->rate}}">
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
                        maxlength="48"
                        value="{{$rate->description}}">
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
