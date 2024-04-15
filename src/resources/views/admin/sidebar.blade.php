
@extends('base')


@section('title', 'Admin')


@section('container')
    <div class="h-screen w-64 text-black flex flex-col bg-amber-400">
        <div>
            <img src="{{ asset('storage/logo_unicaen_bl.png') }}" alt="Description de l'image">
        </div>
        <div tabindex="0" class="collapse collapse-arrow">
            <div class="collapse-title text-sm font-medium hover:bg-gray-200/20">
                FAQ
            </div>
            <div class="collapse-content">
                <ul>
                    <li><a href="admin/liste-question">Liste question</a></li>
                    <li><a href="/admin/ajouter-question">Ajouter une question</a></li>
                </ul>
            </div>
        </div>
        <div tabindex="0" class="collapse collapse-arrow">
            <div class="collapse-title text-sm font-medium hover:bg-gray-200/20">
                Utilisateurs
            </div>
            <div class="collapse-content">
                <ul>
                    <li><a href="/admin/etudiants">Étudiants</a></li>
                    <li><a href="/admin/enseignants">Enseignants</a></li>
                    <li><a href="/admin/enseignants">Administrateurs</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
