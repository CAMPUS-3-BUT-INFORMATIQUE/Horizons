@extends('base')
@section('title', 'Ajouter un rapport de réunion')
@section('container')
    <h1 class="text-xxl">Ajouter un rapport de réunion</h1>
    <form action="{{ route('reports.store') }}" method="post">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="meeting_id">Date et horaires</label>
            <input type="datetime-local" name="date" class="input input-bordered w-full max-w-xs">
        </div>
        <div class="flex flex-col gap-2">
            <label for="content">Contenu</label>
            <x-forms.tinymce-editor name="content"></x-forms.tinymce-editor>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection 