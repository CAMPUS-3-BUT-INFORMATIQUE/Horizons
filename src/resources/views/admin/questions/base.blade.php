
@extends('admin.layout')
@php(
    $questions = [
        ['id' => 1, 'title' => 'Où trouver mon certificat de scolarité ?', 'answer' => 'unicaen.fr', 'category' => 'Certificats'],
        ['id' => 2, 'title' => 'Comment réinitialiser mon mot de passe ?', 'answer' => 'Vous pouvez réinitialiser votre mot de passe en suivant les instructions sur notre page de réinitialisation.', 'category' => 'Compte'],
        ['id' => 3, 'title' => 'Comment contacter le support technique ?', 'answer' => 'Vous pouvez contacter notre support technique par e-mail à support@example.com ou par téléphone au 123-456-7890.', 'category' => 'Support'],
    ]
)

@section('title', 'Liste des questions')

@section('content')

    <div class="flex justify-between items-center p-4 mb-2">
        <div class="flex items-center gap-6">
            <h1 class="text-2xl font-bold">Liste des questions</h1>
            <a href="{{route('admin.questions.add')}}" class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Ajouter une question
            </a>
        </div>
        <label class="input input-bordered flex items-center gap-2">
            <input type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
            </svg>
        </label>
    </div>

    @include('admin.questions.list', ['questions' => $questions])

@endsection
