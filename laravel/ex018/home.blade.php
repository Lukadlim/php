@extends('site.layout')
@section('title', 'This is our home page')

@section('content')
    
    {{-- {{ isset($name) ? 'existe' : 'not exist' }} --}}

    {{-- {{ $test ?? 'pattern' }} --}}

    @if ($name == 'Rodrigo')
        True
    @else
        false
    @endif

    <br>

    @unless ($name == 'Rodrigo')
        True
    @else
        False
    @endunless

    <br>

    @switch($age)
        @case(28)
            The age is 28
            @break
        @case(29)
            The age is 29
            @break
        @default
            I dont know the age
    @endswitch

    <br>
    
    @isset($name)
        The name exist
    @endisset

    <br>

    @empty($email)
        The email doesn't exist
    @endempty

    <br>

    @auth
        it's authenticated
    @endauth

    @guest
        It's not authenticated
    @endguest
@endsection

