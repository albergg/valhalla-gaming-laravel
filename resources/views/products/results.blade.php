@extends('layout.base') 
@section('title', ' VG Products Results') 
@section('content')

<div class="container">
    <h1>Products results to search: {{ $queryString }}</h1>
        <ul>
        @forelse ($result as $product)
        <li>{{ $product->name }}</li>
        <img src="/storage/products/{{ $product->image }}" class="img-fluid rounded">
        <br>
        <a href="/products/{{ $product->id }}"class="button primary">See detail</a>
        <hr>
        @empty
        <strong>No result for the search</strong> @endforelse
        </ul> 

        <a href="/products/" class="button primary">Back</a>

    
</div>


@endsection
