@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                </div>

                <div class="card-body">
                    <img src="{{asset(Auth::user()->image)}}"
                         style="border-radius:10%;width:50px;
                                height:50px; margin-right:10px;
                                margin-bottom: 10px">
                    You are logged in!
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="app">
                            <passport-clients></passport-clients>
                            <passport-authorized-clients></passport-authorized-clients>
                            <passport-personal-access-tokens></passport-personal-access-tokens>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
