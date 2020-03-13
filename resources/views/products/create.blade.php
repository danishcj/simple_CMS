@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>New Product</h2>
                        <div class="ml-auto">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back to all Products</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control {{ $errors->has('product_name') ? 'is-invalid' : '' }}">
                            @if ($errors->has('product_name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('product_name') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="model_number">Model Number</label>
                            <input type="text" name="model_number" id="model_number" class="form-control {{ $errors->has('model_number') ? 'is-invalid' : '' }}">
                            @if ($errors->has('model_number'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('model_number') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="product_name">SKU</label>
                            <input type="text" name="sku" id="sku" class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}">

                            @if ($errors->has('sku'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('sku') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="product_name">EAN</label>
                            <input type="text" name="ean" id="ean" class="form-control {{ $errors->has('ean') ? 'is-invalid' : '' }}">
                            @if ($errors->has('ean'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('ean') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description-body">Description</label>
                            <textarea name="description" id="description" rows="10" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"></textarea>
                            @if ($errors->has('description'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </div>
                            @endif
                        </div>
                        {{csrf_field()}}
                        <input type="file" id="files" name="product_images[]" multiple />

                        @if ($errors->has('files'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('files') }}</strong>
                                </div>
                            @endif
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Add Product</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
@endsection