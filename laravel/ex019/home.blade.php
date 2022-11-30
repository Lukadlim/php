@extends('site.layout')
@section('title', 'This is our home page')

@section('content')

    @for ($i = 0; $i <= 10; $i++)
        The actual value is {{ $i }} <br>
    @endfor

    <hr>

    @php $c = 0; @endphp
    @while ($c <= 10)
        The actual value with 'while' is {{ $c }}
        <br>
        @php $c ++; @endphp
    @endwhile

    <hr>

    @foreach ($fruits as $fruit)
        {{ $fruit }} <br>
    @endforeach

    <hr>

    @php $cars = []; @endphp

    @forelse ($cars as $car)
        {{ $car }} <br>
    @empty 
        There's no cars
    @endforelse

    
@endsection

