{{-- @extends('layouts.app') --}}
@extends('layout.base')
@section('title', 'VG | Products')
@section('content')



    <h2>List of products - Total ({{ $allProducts }})</h2>

    {{-- @if ( session('deleted') )
    <div class="alert alert-success">
        {{ session('deleted') }}
    </div>
    @endif @if ( session('edited') )
    <div class="alert alert-success">
        {{ session('edited') }}
    </div>
    @endif --}}
<div class="container">
    <br>
    <a href="/products/create" class="btn btn-info btn-lg">Create product</a>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Brands</h2>
                <ul>
                    @foreach ($products as $oneProduct)
                    <li style="padding: 10px 0;">
                        <a href="">{{ $oneProduct->brand->name ?? 'No brand' }}</a> <br> {{-- <b>IMAGE</b>:{{ $oneProduct->image ?? 'Sin
                        imagen' }} | --}}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col">
                <ul>
                    @foreach ($products as $oneProduct)
                    <li style="padding: 10px 0;">
                        <b>Name:</b> {{ $oneProduct->name }} <br>
                        <b>Price</b>:{{ $oneProduct->price ?? 'No price' }} <br>
                        <b>Brand</b>:{{ $oneProduct->brand->name ?? 'No brand' }} <br>
                        <img src="/storage/products/{{ $oneProduct->image }}" width="200"><br>
                        <a href="/products/{{ $oneProduct->id }}" class="btn btn-success">See detail</a>
                    </li>
                    @endforeach
                </ul>
                
                {{ $products->links() }}
            </div>
    
</div>
    
<div>


</div>
@endsection