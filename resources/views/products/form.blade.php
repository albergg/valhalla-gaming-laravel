@extends('layouts.app')

@section('content')
    <h2>Create product</h2>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
    
        <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        </div>
    
        <div class="form-group">
            <label>Category:</label>
            <select class="form-control" name="category_id" value="{{ old('category_id') }}">
                <option value="">Choose</option>
                @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    {{ $category->id == old('category_id') ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>
                @endforeach
                </select>
        </div>
    
        {{-- <div class="form-group">
            <label>Image:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile">Choose file...</label>
            </div>
        </div> --}}
    
        <div class="form-group">
            <label>Brand:</label>
            <select class="form-control" name="brand_id" value="{{ old('brand_id') }}">
    					<option value="">Choose</option>
    				@foreach ($brands as $brand)
    		      	<option
    						value="{{ $brand->id }}"
    						{{ $brand->id == old('brand_id') ? 'selected' : '' }}
    					>
    						{{ $brand->name }}
    					</option>
    		      @endforeach
    		   </select>
        </div>
        
        <div class="form-group">
            <label>Description:</label>
            <input type="text-area" name="description" class="form-control" value="{{ old('description') }}">
        </div>
        {{-- <div class="form-group">
            <label>Release:</label>
            <input type="date" name="release_date" class="form-control" value="{{ old('release_date') }}">
        </div> --}}
    
        <button type="submit" class="btn btn-success">CREATE</button>
    </form>
@endsection