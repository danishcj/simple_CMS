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
                        <h2>All Shops</h2>
                        <div class="ml-auto">
                            <a href="{{ route('shops.create') }}" class="btn btn-outline-secondary">Add Shop</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                @include ('layouts._messages')
                <table class="table table-bordered" id="laravel">
               <thead>
                  <tr>
                     <th>Shop Name</th>
                     <th>Country</th>
                     <th>Created at</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($shops as $shop)
                  <tr>
                     <td>{{ $shop->name }}</td>
                     <td>{{ $shop->country_name }}</td>
                     <td>{{ date('d m Y', strtotime($shop->created_at)) }}</td>
                     <td>
                     <button class="btn btn-light"><a href="{{ route('shops.products', $shop->id) }}">PRODUCTS</a></button>
                     <button class="btn btn-light"><a href="{{ route('shops.edit', $shop->id) }}">EDIT</a></button>
                 
                      <form class="form-delete" method="post" action="{{ route('shops.destroy', $shop->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
                {{ $shops->links()}}
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