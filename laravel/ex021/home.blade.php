@extends('site.layout')
@section('title', 'This is our home page')

@section('content')

    @include('includes.message', ['title' => 'Success message!'])

    @component('components.sidebar')
        @slot('paragraph')
            Random text from slot
        @endslot
    @endcomponent

@endsection

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush

