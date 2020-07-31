@extends('layouts.app')

@section('title')
    Rates: Show user profile
@endsection

@section('content')
    <div class="container">
        <p>This page will show user profile</p>
        <hr>
        <form>
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Id" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input class="form-control" type="date" placeholder="YY-MM-DD" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control" id="inputEmail" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" class="form-control" id="inputPhone" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-sm-2 col-form-label">Created At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Created At" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="updated_at" class="col-sm-2 col-form-label">Updated At</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Updated At" readonly>
                </div>
            </div>
            <a href="/rates" class="btn btn-primary"> Back </a>


        </form>
    </div>
@endsection
