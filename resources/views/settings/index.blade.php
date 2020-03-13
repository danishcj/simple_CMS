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
                        <h2>All Users</h2>
                        <div class="ml-auto">
                            <a href="{{ route('settings.create') }}" class="btn btn-outline-secondary">Add New User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                @include ('layouts._messages')
                <table class="table table-bordered" id="laravel">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Level</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($users as $user)
                  <tr>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user->level }}</td>
                     <td>
                     <button class="btn btn-light"><a href="{{ route('settings.edit', $user->id) }}">EDIT</a></button>
                 
                      <form class="form-delete" method="post" action="{{ route('settings.destroy', $user->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
                {{ $users->links()}}
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