@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Edit Product</h2>
                        <div class="ml-auto">
                            <a href="{{ route('shops.products', $product->shops_id) }}" class="btn btn-outline-secondary">Back to Shop Products</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   <form action="{{ route('shops.update_product', $product->id) }}" method="post">
                   @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" id="product_name" value="{{ $product->product_name }}" class="form-control {{ $errors->has('product_name') ? 'is-invalid' : '' }}">

                            @if ($errors->has('product_name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('product_name') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="model_number">Model Number</label>
                            <input type="text" name="model_number" id="model_number" value="{{ $product->model_number }}" class="form-control {{ $errors->has('model_number') ? 'is-invalid' : '' }}">
                            @if ($errors->has('model_number'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('model_number') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="product_name">SKU</label>
                            <input type="text" name="sku" id="sku" value="{{ $product->sku }}" class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}">
                            @if ($errors->has('sku'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('sku') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="product_name">EAN</label>
                            <input type="text" name="ean" id="ean" value="{{ $product->ean }}" class="form-control {{ $errors->has('ean') ? 'is-invalid' : '' }}">
                            @if ($errors->has('ean'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('ean') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description-body">Description</label>
                            <textarea name="description" id="description" rows="10"  class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">"{{ $product->description }}"</textarea>
                            @if ($errors->has('description'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </div>
                            @endif
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