@extends('site.layout')
@section('title', 'This is our home page')

@section('content')

    <div class="row container">

        <br>

        <div class="col s12 m6">
            <img src="{{ $product->image }}" class="responsive-img">
        </div>
        
        <div class="col s12 m6">
            <p style="font-size: 2em"> {{ $product->name }} </p>
            <p style="font-size: 2em"> US$ {{ number_format($product->price, 2, ',', '.') }} </p>
            <p> {{ $product->description }} </p>
            <p>
                Posted by: {{ $product->user->firstname }} <br>
                Category: {{ $product->category->name }}
            </p>
            <button class="btn orange btn-large">Buy</button>
        </div>
    </div>

@endsection
