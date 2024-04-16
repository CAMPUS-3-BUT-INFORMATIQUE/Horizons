
@extends('base')

@section('title', 'Horizon')

@section('container')
    <x-header/>
    <x-Banner :sectionName="$sectionName" :color="$color" />

    <div id="content">
        @yield('content')
    </div>

    <x-footer/>
@endsection
