@extends('layout.base') 
@section('title', 'Details User') 
@section('content')
<h2>{{ $users->name }}</h2>
@if ( session('errorDeleted') )
<div class="alert alert-danger">
    {{ session('errorDeleted') }}
</div>
@endif
<p><b>Name:</b> {{ $users->name ?? 'No name' }}</p>
<p><b>Email:</b> {{ $users->email ?? 'No email' }}</p>
<p><b>Country:</b> {{ $users->country ?? 'No country' }}</p>
<p><b>Products:</b> 
    @forelse ($users->products as $product)
    <li> 
        {{ $product->name }}
        <br>
        <img src="/storage/products/{{ $product->image }}" width="200">
        <br>
    </li>
    @empty
    <li> No Products </li>
    @endforelse
</p>
{{-- <p><b>Description:</b> {{ $users->description }}</p> --}}
{{--
<p><b>Image:</b> {{ $oneProduct->image }}</p> --}}

{{-- <img src="/storage/products/{{ $product->image }}" width="200"> --}}
<hr>
<a href="/users" class="btn btn-info">Back</a>
<a href="/users/{{ $users->id }}/edit" class="btn btn-warning">Edit</a>
{{-- <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block;">
    @csrf {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">Delete</button>
</form> --}}
@endsection