<html>
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />

<script src="{{ asset('js/app.js') }}" > </script> 
</head>
<body>

@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">
                <div class="d-flex align-items-center">
                        <h2>All Products</h2>
                        <div class="ml-auto">
                            <a href="{{ route('products.create') }}" class="btn btn-outline-secondary">Add Product</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                @include ('layouts._messages')
                <table class="table table-bordered" id="laravel">
               <thead>
                  <tr>
                     <th>Product Name</th>
                     <th>Model Number</th>
                     <th>Created at</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($products as $product)
                  <tr>
                     <td>{{ $product->product_name }}</td>
                     <td>{{ $product->model_number }}</td>
                     <td>{{ date('d m Y', strtotime($product->created_at)) }}</td>

                     <td>
                     
                     <button class="btn btn-light"><a href="{{ route('products.select_shop', $product->id) }}">ASSIGN</a></button>
                     <button class="btn btn-light"><a href="{{ route('products.edit', $product->id) }}">EDIT</a></button>
                 
                      <form class="form-delete" method="post" action="{{ route('products.destroy', $product->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                      </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
                {{ $products->links()}}
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        </div>
</div>
@endsection
<body>
</html>