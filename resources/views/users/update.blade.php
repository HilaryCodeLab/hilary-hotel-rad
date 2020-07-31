@extends('layouts.app')

@section('content')

    <div class="container">
        <div >

            <div >

                <div >

                    <h2>Edit User</h2>

                </div>
               @role('Admin|Manager|Maintenance')
                    <div >

                        <a  href="{{ route('users.index') }}"> Back</a>

                    </div>
                @else
                    <div >

                        <a  href="{{url('/home')}}"> Back</a>

                    </div>
                @endrole
            </div>

        </div>



        @if (count($errors) > 0)

            <div >

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id],'enctype'=>"multipart/form-data"]) !!}

        <div >

            <div >

                <div >

                    <strong>Photo</strong>
                     <br>
                    <img src="{{asset(Auth::user()->image)}}" style="width: 200px; height: 200px">



                    {!! Form::file('image', null, array('placeholder' => 'Your Photo','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>First Name:</strong>

                    {!! Form::text('given_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>Last Name:</strong>

                    {!! Form::text('family_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>Email:</strong>

                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>Date of Birth:</strong>

                    {!! Form::date('dob', null, array('placeholder' => 'Date of Birth','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>Password:</strong>

                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>Confirm Password:</strong>

                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

                </div>

            </div>

            <div >

                <div >

                    <strong>Role:</strong>

                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

                </div>

            </div>

            <div >

                <button class="btn btn-primary" type="submit" style="margin-top: 10px" >Submit</button>

            </div>

        </div>

        {!! Form::close() !!}

    </div>




@endsection
