{{-- 
@extends('layouts.app') --}} 
@extends('layout.base') 
@section('title', 'VG | Users') 
@section('content')



<h2>List of Users - Total ({{ $allUsers }})</h2>

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
        <div class="row">
            {{-- <div class="col">
                <h2>Brands</h2>
                <ul>
                    @foreach ($products as $oneProduct)
                    <li style="padding: 10px 0;">
                        <a href="">{{ $oneProduct->brand->name ?? 'No brand' }}</a> <br>
                    </li>
                    @endforeach
                </ul>
            </div> --}}
            
            <div class="col">
                <ul>
                    @foreach ($users as $oneUser)
                    <li style="padding: 10px 0;">
                        <b>Name:</b> {{ $oneUser->name }} <br>
                        <b>Email</b>:{{ $oneUser->email ?? 'No email' }} <br>
                        <b>Products</b>:{{ $oneUser->products()->count() ?? 'No products' }} <br>
                        {{-- <img src="/storage/products/{{ $oneUser->image }}" width="200"><br> --}}
                        <a href="/users/{{ $oneUser->id }}" class="btn btn-success">See detail</a>
                    </li>
                    @endforeach
                </ul>

                {{ $users->links() }}
            </div>

        </div>

        <div>


        </div>
@endsection