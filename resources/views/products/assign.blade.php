@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Assign Product</h2>
                        <div class="ml-auto">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back to all Products</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   <form action="{{ route('products.assign', $product->id) }}" method="post">

                        @csrf
                        <div class="form-group">
                            <label for="product_name">Product Name:</label>
                            <label for="product_name"><b>"{{ $product->product_name }}"</b></label>
                            <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                        </div>

                        <div class="form-group">
                            <label for="Shops">Select Shop:</label>
                            <select class="form-control" name ="shops_id" id="shops_id">
                            @foreach($shops as $shop)
                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                            @endforeach
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