@extends('base')

@section('title', 'Admin')

@php(
    $menus = array(
                'FAQ' => [
                    ['url' => '/admin/liste-question', 'name' => 'Liste question'],
                    ['url' => '/admin/ajouter-question', 'name' => 'Ajouter une question'],
                ],
                'Utilisateurs' => [
                    ['url' => '/admin/etudiants', 'name' => 'Étudiants'],
                    ['url' => '/admin/enseignants', 'name' => 'Enseignants'],
                    ['url' => '/admin/enseignants', 'name' => 'Administrateurs'],
                ],
            )
)

@section('container')
    <div class="flex">
        <div class="h-screen w-1/6 text-black flex flex-col bg-amber-400 p-3">
            <div>
                <img src="{{ asset('storage/logo_unicaen_bl.png') }}" alt="Logo Unicaen">
            </div>
            @foreach ($menus as $menu => $submenus)
                <div tabindex="{{ $loop->index }}" class="collapse collapse-arrow hover:bg-gray-200/20 my-3">
                    <input type="radio" name="accordion" />
                    <div class="collapse-title flex items-center font-bold text-xl">
                        {{ $menu }}
                    </div>
                    @if ($submenus)
                        <div class="collapse-content pl-6">
                            <ul class="space-y-2">
                                @foreach ($submenus as $submenu)
                                    <li><a href="{{ $submenu['url'] }}">{{ $submenu['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="flex flex-col w-5/6">
            <div class="flex items-center justify-between p-4 mb-2 bg-gray-500/30">
                <div>
                    <a href="/" class="rounded-md bg-gray-600/20 hover:bg-gray-900/20 px-3 py-2 text-white transition-all duration-300 flex items-center justify-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span class="font-bold">Accueil</span>
                    </a>
                </div>
                <button class="bg-gray-400 hover:bg-gray-300 text-white font-bold py-2 px-4 rounded">
                    Se déconnecter

                </button>
            </div>
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
