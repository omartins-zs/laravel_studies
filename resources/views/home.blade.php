@extends('layouts.main_layout')
@section('content')

{{-- <p class="display-6 text-secondary text-center py-5">CONTENT</p> --}}
{{-- apresentar myName a partir da route::view --}}

@if(!empty($myName))
    <h1 class="display-4 text-center text-primary">Hello, {{ $myName }}!</h1>
@endif

@endsection