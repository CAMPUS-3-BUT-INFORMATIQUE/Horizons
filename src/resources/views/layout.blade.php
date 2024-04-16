
@extends('base')

@section('title', 'Horizon')

@section('container')
    <x-header/>
    <div id="content">
        @yield('content')
    </div>
    <footer class="bg-neutral-700 text-center lg:text-left absolute bottom-0 w-screen">
        <div class="p-4 text-center text-surface text-white">
            @include('footer')
        </div>
    </footer>
@endsection
