
@extends('admin.layout')

@section('title', 'Nouvelle question')

@section('content')
    <div class="mt-6">
        <h1 class="text-2xl font-bold ml-4">Ajouter une nouvelle question</h1>
        <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="max-w-2xl mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="new_question">
                    Titre nouvelle question
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="new_question" type="text" placeholder="Nouvelle question" name="new_question">
            </div>
            <div class="max-w-2xl mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="new_response">
                    Contenu réponse
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="new_response" type="text" placeholder="Réponse" name="new_response">
            </div>
            <div class="max-w-2xl mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="new_category">
                    Catégorie
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="new_category" type="text" placeholder="Rechercher" name="new_category">
            </div>
            <div class="max-w-2xl">
                <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
@endsection
