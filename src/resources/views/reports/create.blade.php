@extends('base')
@section('title', 'Ajouter un rapport de réunion')
@section('container')
    <h1 class="text-2xl font-extrabold my-6">Ajouter un rapport de réunion</h1>
    <form action="{{ route('reports.store') }}" method="post" class="flex flex-col gap-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="date">Date et horaires</label>
            <input type="datetime-local" name="date" class="input input-bordered w-full max-w-xs">
        </div>
        <div class="flex flex-col gap-2">
            <x-forms.choice-select label="Participants" name="participants" :options="$participants" multiple="multiple"></x-choice-select>
        </div>
        <div class="flex flex-col gap-2">
            <label for="ordre">Ordre du jour</label>
            <input type="text" name="ordre" class="input input-bordered w-full max-w-xs">
        </div>
        <div class="flex flex-col gap-2">
            <x-forms.choice-select label="Décisions" name="decisions" :options="$decisions" multiple="multiple"></x-choice-select>
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <label for="conclusion">Conclusion</label>
            <x-forms.tinymce-editor name="conclusion"></x-forms.tinymce-editor>
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <label for="comment">Commentaires</label>
            <x-forms.tinymce-editor name="comment"></x-forms.tinymce-editor>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="btn btn-primary w-1/3">Ajouter</button>
        </div>
    </form>
@endsection