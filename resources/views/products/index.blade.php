@extends('layouts.app')

@section('content')
    

    <h2>Listado de productos - Total ({{ $allProducts }})</h2>

    {{-- @if ( session('deleted') )
    <div class="alert alert-success">
        {{ session('deleted') }}
    </div>
    @endif @if ( session('edited') )
    <div class="alert alert-success">
        {{ session('edited') }}
    </div>
    @endif --}}

    <br>
    <a href="/products/create" class="btn btn-info btn-lg">Crear producto</a>
    <br>
    <ul>
        @foreach ($products as $oneProduct)
        <li style="padding: 10px 0;">
            <b>Name:</b> {{ $oneProduct->name }} |
            <b>Price</b>:{{ $oneProduct->price ?? 'Sin precio' }} |
            {{-- <b>Genre:</b> {{ $oneProduct->genre ? $oneProduct->genre->name : 'Sin género' }} --}}
            <a href="/products/{{ $oneProduct->id }}" class="btn btn-success">ver detalle</a>
        </li>
        @endforeach
    </ul>

    {{ $products->links() }}

@endsection