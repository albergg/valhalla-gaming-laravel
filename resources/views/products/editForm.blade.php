@extends('layout.base') 
@section('title', 'Edit Product') 
@section('content')

<div class="container-fluid">
    

    <h2>Edit product: {{ $product->name }}</h2>

    <img src="/storage/products/{{ $product->image }}" width="300" class="rounded mx-auto d-block"> 
    <br>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card cardVG">

    <form action="/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
        @csrf {{ method_field('PUT') }}
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': '' }}" value="{{ old('name', $product->name) }}">
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        </div>

        <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid': '' }}" value="{{ old('price', $product->price) }}">
            <div class="invalid-feedback">
                {{ $errors->first('price') }}
            </div>
        </div>

        <div class="form-group">
            <label>Category:</label>
            <select class="form-control" name="category_id" value="{{ old('category_id') }}">
                    <option value="">Choose</option>
                    @foreach ($categories as $category)
                    <option
                    value="{{ $category->id }}"
                    {{ $category->id == $product->category_id ? 'selected' : '' }}
                    >
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Brand:</label>
            <select class="form-control" name="brand_id" value="{{ old('brand_id') }}">
                    <option value="">Choose</option>
                    @foreach ($brands as $brand)
                    <option
                    value="{{ $brand->id }}"
                    {{ $brand->id == $product->brand_id ? 'selected' : '' }}
                    >
                    {{ $brand->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <input type="text-area" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid': '' }}" value="{{ old('description', $product->description) }}">
            <div class="invalid-feedback">
                {{ $errors->first('description') }}
            </div>
        </div>
        
        <div class="form-group">
            <label>Image:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile">Choose file...</label>
            </div>
        </div>
        {{-- <div class="form-group">
            <label>Release: </label>
            <input type="date" name="release_date" class="form-control" value="{{ $product->release_date->format('Y-m-d') }}">
        </div> --}}

        <button type="submit" class="btn btn-success">Save</button>
        <a href="/products/{{ $product->id }}" class="btn btn-warning">Back</a>
    </form>
</div>
</div>
</div>
</div>
</div>

@endsection