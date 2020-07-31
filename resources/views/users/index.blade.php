@extends('layouts.app')



@section('content')

    <div >

        <div >

            <div >

                <h2>Users Management</h2>

            </div>

            <div >

                <a  href="{{ route('users.create') }}"> Create New User</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div >

            <p>{{ $message }}</p>

        </div>

    @endif



    <table id="myTable" class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Id</th>

                <th scope="col">Full Name</th>

                <th scope="col">Email</th>

                <th scope="col">Roles</th>

                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->given_name }} {{$user->family_name}}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label >{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a  href="{{ route('users.show',$user->id) }}" class="btn btn-info">Show</a>
                        <a  href="{{ route('users.edit',$user->id) }}" class="btn btn-warning">Edit</a>

                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                        {!! Form::close() !!}

                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>



    {!! $data->render() !!}




@endsection

@section('scripts')

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

@endsection

