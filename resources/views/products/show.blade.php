@extends('layouts.app')

@section('content')
    <h2>{{ $product->name }}</h2>
        @if ( session('errorDeleted') )
        <div class="alert alert-danger">
            {{ session('errorDeleted') }}
        </div>
        @endif
        <p><b>Price:</b> {{ $product->price ?? 'Sin duración' }}</p>
        <p><b>Category:</b> {{ $product->category_id ?? 'Sin categoria' }}</p>
        <p><b>Brand:</b> {{ $product->brand_id ?? 'Sin marca' }}</p>
        <p><b>Description:</b> {{ $product->description }}</p>
        {{-- <p><b>Genre:</b> {{ $product->genre ? $product->genre->name : 'Sin género'}}</p>
        <img src="/storage/posters/{{ $product->poster }}" width="200"> --}}
        <hr>
        <a href="/products" class="btn btn-info">volver</a>
        <a href="/products/{{ $product->id }}/edit" class="btn btn-warning">actualizar</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block;">
            @csrf {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">borrar</button>
        </form>
@endsection