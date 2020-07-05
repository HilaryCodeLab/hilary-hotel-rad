@extends('layouts.app')

@section('title')
    Rates: Show individual rate
@endsection

@section('content')
    <div class="container">
        <p>This page will show individual rate</p>
        <hr>
        <form>
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder={{$rate->id}} readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="rate" class="col-sm-2 col-form-label">Rate</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder={{$rate->rate}} readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder={{$rate->description}} readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-sm-2 col-form-label">Created At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder={{$rate->created_at}} readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="updated_at" class="col-sm-2 col-form-label">Updated At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder={{$rate->updated_at}} readonly>
                </div>
            </div>
            <a href="/rates" class="btn btn-primary"> Back </a>
            <a href="/rates/delete" class="btn btn-primary"> Delete </a>

        </form>
    </div>
@endsection
