@extends('layouts.app')

@section('title')
Room Booking
@endsection

@section('content')
    <div class="container">
        <h1>Room Booking</h1>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" class="form-control" id="inputPhone">
                </div>
            </div>
            <div class="form-group">
                <label for="room">Room</label>

                <select multiple class="form-control" id="room">
{{--                    @foreach($rates as $rate)--}}
{{--                        <option>{{$rate->descriptions}}</option>--}}
{{--                    @endforeach--}}


                    <option>Single</option>
                    <option>Double</option>
                    <option>Princess</option>
                    <option>Executive</option>
                    <option>Hollywood</option>
                    <option>President</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numberOfGuests">Number of Guests</label>
                <select multiple class="form-control" id="numberOfGuests">
                    <option>1</option>
                    <option>2+</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startDate">Start date:</label>
                    <input type="date" id="startDate" class="form-control"
                           value=""
                           min="2018-01-01" max="2099-12-31">
                </div>
                <div class="form-group col-md-6">
                    <label for="endDate">End date:</label>
                    <input type="date" id="endDate" class="form-control"
                           value=""
                           min="2018-01-01" max="2099-12-31">
                </div>
            </div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Book</button>
            </div>
        </form>
    </div>

@endsection
