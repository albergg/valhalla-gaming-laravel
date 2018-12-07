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
<h2>Find product</h2>
<div class="container text-center">
    <form action="/products/results" method="get">
        <div class="form-group">
            <input type="text" name="searchProduct" class="from-control" placeholder="Find a product"> <br>
            <button type="submit" class="button primary">Buscar</button>
        </div>
    </form>
</div>
<div class="container">
    <br>
    <a href="/products/create" class="button primary">Create product</a>
    <br>
</div>
    
    <div class="container">
        <div class="row">
            <div class="col-5 col-sm-3">
                <h2>Brands</h2>
                <ul>
                    @foreach ($products as $oneProduct)
                    <li >
                        <a href="">{{ $oneProduct->brand->name ?? 'No brand' }}</a> <br> {{-- <b>IMAGE</b>:{{ $oneProduct->image ?? 'Sin
                        imagen' }} | --}}
                    </li>
                    @endforeach
                </ul>
            </div>
   
            <style>
                .row { margin-bottom: 1em; }
                .product-list .card { background-color: #333}
                .card img { max-height: 250px }
                .card {margin-bottom: 1em;}
            </style>

            <div class="col-7 col-sm-9 product-list">
                <div class="row ">
                    @foreach ($products as $oneProduct)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card">
                            <a href="/storage/products/{{ $oneProduct->image }}" data-lightbox="product_{{ $oneProduct->id }}">
                                <img src="/storage/products/{{ $oneProduct->image }}" class="img-fluid rounded" data-lightbox="{{ $oneProduct->id }}">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $oneProduct->name }}</h5>
                                <p class="card-text">
                                    <b>Price</b>:{{ $oneProduct->price ?? 'No price' }} <br>
                                    <b>Brand</b>:{{ $oneProduct->brand->name ?? 'No brand' }} <br>
                                </p>
                                <a href="/products/{{ $oneProduct->id }}" class="button primary">See detail</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                
                {{ $products->links() }}
            </div>
    
</div>
    
<div>


</div>
@endsection