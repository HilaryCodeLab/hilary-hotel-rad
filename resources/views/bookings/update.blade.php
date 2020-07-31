@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Update Booking</h3>
        {!! Form::model($booking ,['method' => 'PUT', 'route' =>['bookings.update', $booking->id]]) !!}
        <div class="form-group row">
            <div class="col-xs-12 form-group">
                {!! Form::label('user_id','Guest',['class'=>'control-label']) !!}
                {!! Form::select('user_id', $users, old('user_id'), ['class' => 'form-control select2']) !!}
                <p class="help-block"></p>
                @if($errors->has('user_id'))
                    <p class="help-block">
                        {{ $errors->first('user_id') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-12 form-group">
                {{--                        <strong>Room:</strong>--}}
                {!! Form::label('room_id','Room',['class'=>'control-label']) !!}
                {!! Form::select('room_id', $rooms, old('room_id'), ['class' => 'form-control select2']) !!}
                <p class="help-block"></p>
                @if($errors->has('room_id'))
                    <p class="help-block">
                        {{ $errors->first('room_id') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-12 form-group">
                {{--                        <strong>Start at:</strong>--}}
                {!! Form::label('start_at','Start at',['class'=>'control-label']) !!}
                {{--                        {!! Form::text('start_at', old('start_at'), ['class' => 'form-control datetimepicker', 'placeholder' => '', 'required' => '']) !!}--}}
                {!!Form::date('start_at',\Carbon\Carbon::now(), ['required' => '','class' => 'form-control'])!!}
                <p class="help-block"></p>
                @if($errors->has('start_at'))
                    <p class="help-block">
                        {{ $errors->first('start_at') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-12 form-group">
                {{--                        <strong>End at:</strong>--}}
                {!! Form::label('end_at','End at',['class'=>'control-label']) !!}
                {{--                        {!! Form::text('end_at', old('end_at'), ['class' => 'form-control datetimepicker', 'placeholder' => '', 'required' => '']) !!}--}}
                {!!Form::date('end_at',\Carbon\Carbon::now(), ['required' => '','class' => 'form-control'])!!}
                <p class="help-block"></p>
                @if($errors->has('end_at'))
                    <p class="help-block">
                        {{ $errors->first('end_at') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-12 form-group">
                {{--                        <strong>Notes:</strong>--}}
                {!! Form::label('notes','Notes',['class'=>'control-label']) !!}
                {!! Form::textarea('notes', old('notes'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('notes'))
                    <p class="help-block">
                        {{ $errors->first('notes') }}
                    </p>
                @endif
            </div>
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>



@stop

@section('javascript')
    @parent
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    {{--    <script>--}}
    {{--        $('.datetimepicker').datetimepicker({--}}
    {{--            format: "YYYY-MM-DD HH:mm"--}}
    {{--        });--}}
    {{--    </script>--}}
@stop
