@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>New Shop</h2>
                        <div class="ml-auto">
                            <a href="{{ route('shops.index') }}" class="btn btn-outline-secondary">Back to all Shops</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                   <form action="{{ route('shops.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">

                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="country_name">Country</label>
                            <input type="text" name="country_name" id="country_name" class="form-control {{ $errors->has('country_name') ? 'is-invalid' : '' }}">

                            @if ($errors->has('country_name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('country_name') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Add Shop</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection