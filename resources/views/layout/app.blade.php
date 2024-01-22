@extends('layout.main')

@section('sub-layout')
    @include('partials.nav')
    @yield('content')
@endsection
