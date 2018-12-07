@extends('layout.base') 
@section('title', 'Detail') 
@section('content')
    <h2>{{ $product->name }}</h2>
        @if ( session('errorDeleted') )
        <div class="alert alert-danger">
            {{ session('errorDeleted') }}
        </div>
        @endif
        <div class="container">
            
            <a href="/storage/products/{{ $product->image }}" data-lightbox="product_{{ $product->id }}">
                <img src="/storage/products/{{ $product->image }}" class="img-fluid rounded" data-lightbox="{{ $product->id }}">
            </a>
            {{-- <img src="/storage/products/{{ $product->image }}" width="200" class="rounded"> --}}
            <hr>
            <p><b>Price:</b> {{ $product->price ?? 'Sin duración' }}</p>
            <p><b>Category:</b> {{ $product->category->name ?? 'Sin categoria' }}</p>
            <p><b>Brand:</b> {{ $product->brand->name ?? 'Sin marca' }}</p>
            <p><b>Description:</b> {{ $product->description }}</p>
            {{-- <p><b>Image:</b> {{ $oneProduct->image }}</p> --}}
            
            <a href="/products" class="btn btn-info">Back</a>
            <a href="/products/{{ $product->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block;">
                    @csrf {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
                @endsection