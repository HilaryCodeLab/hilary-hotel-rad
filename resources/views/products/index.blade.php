@extends('layouts.app')



@section('content')

    <div >

        <div >

            <div >

                <h2>Products</h2>

            </div>

            <div >

                @can('product-create')

                    <a  href="{{ route('products.create') }}"> Create New Product</a>

                @endcan

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div >

            <p>{{ $message }}</p>

        </div>

    @endif



    <table >

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $product->name }}</td>

                <td>{{ $product->detail }}</td>

                <td>

                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a  href="{{ route('products.show',$product->id) }}">Show</a>

                        @can('product-edit')

                            <a  href="{{ route('products.edit',$product->id) }}">Edit</a>

                        @endcan



                        @csrf

                        @method('DELETE')

                        @can('product-delete')

                            <button type="submit" >Delete</button>

                        @endcan

                    </form>

                </td>

            </tr>

        @endforeach

    </table>



    {!! $products->links() !!}



    <p ><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection
