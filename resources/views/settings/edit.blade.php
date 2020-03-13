@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Edit User</h2>
                        <div class="ml-auto">
                            <a href="{{ route('settings.index') }}" class="btn btn-outline-secondary">Back to all Users</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                   <form action="{{ route('settings.update', $user->id) }}" method="post">
                   @method('PUT')
                        @csrf
                        <div class="form-group">

                            <input type="hidden" id="id" name="id" value="{{ $user->id }}">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">

                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" value="{{ $user->email }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">

                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="Level">Level:</label>
                            <select class="form-control" name ="level" id="level" value="{{ $user->level }}">
                                <option value="Administrator">Administrator</option>
                                <option value="Content Admin">Content Admin</option>
                                <option value="Copywriter">Copywriter</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Save</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection