@extends('layouts.app')



@section('content')

    <div >

        <div >

            <div >

                <h2>Add New Product</h2>

            </div>

            <div >

                <a  href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>



    @if ($errors->any())

        <div >

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <form action="{{ route('products.store') }}" method="POST">

        @csrf



        <div >

            <div >

                <div >

                    <strong>Name:</strong>

                    <input type="text" name="name"  placeholder="Name">

                </div>

            </div>

            <div >

                <div >

                    <strong>Detail:</strong>

                    <textarea  style="height:150px" name="detail" placeholder="Detail"></textarea>

                </div>

            </div>

            <div >

                <button type="submit" >Submit</button>

            </div>

        </div>



    </form>




@endsection
