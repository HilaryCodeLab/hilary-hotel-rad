@extends('layouts.app')



@section('content')

    <div >

        <div >

            <div >

                <h2> Show Product</h2>

            </div>

            <div >

                <a  href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <div >

        <div >

            <div >

                <strong>Name:</strong>

                {{ $product->name }}

            </div>

        </div>

        <div >

            <div >

                <strong>Details:</strong>

                {{ $product->detail }}

            </div>

        </div>

    </div>

@endsection

