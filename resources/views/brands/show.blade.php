@extends('layout.base')
@section('title', 'Brands') 
@section('content')

<h2>SHOW</h2>


<ul>
    <li>
    <p>{{$brands->products()}}</p>
    </li>
</ul>



@endsection 