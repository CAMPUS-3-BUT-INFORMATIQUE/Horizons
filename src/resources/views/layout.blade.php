
@extends('base')

@section('title', 'Horizon')

@section('container')
    <x-header/>
    <x-Banner :sectionName="$sectionName" :color="$color" />
    <div id="content">
        @yield('content')
    </div>
    <footer class="bg-neutral-700 text-center lg:text-left bottom-0 w-screen">
        <div class="p-4 text-center text-surface text-white">
            @include('footer')
        </div>
    </footer>
@endsection
