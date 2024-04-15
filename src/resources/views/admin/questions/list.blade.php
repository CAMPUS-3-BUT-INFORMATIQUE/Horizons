
@extends('base')

@section('title', 'Liste des questions')

@section('container')
    <div class="flex min-h-screen">
        <div class="w-1/6">
            @include('admin.base')
        </div>

        <div class="w-5/6 ml-2">
            <div class="flex justify-between p-4 mb-2 bg-gray-500/30">
                <div></div>
                <button class="bg-gray-400 hover:bg-gray-300 text-white font-bold py-2 px-4 rounded">
                    Se déconnecter
                </button>
            </div>

            <div class="flex justify-between items-center p-4 mb-2">
                <div class="flex items-center gap-6">
                    <h1 class="text-2xl font-bold">Liste des questions</h1>
                    <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Ajouter une question
                    </button>
                </div>
                <label class="input input-bordered flex items-center gap-2">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
            </div>

            <div role="tablist" class="tabs tabs-lifted m-4">
                <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Lycéen" checked />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Question</th>
                                <th>Réponse</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="BUT" />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Question</th>
                                <th>Réponse</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Enseignant" />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Question</th>
                                <th>Réponse</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Où trouver mon certificat de scolarité ?</td>
                                <td>unicaen.fr</td>
                                <td><button class="bg-blue-700 hover:bg-blue-600 text-white rounded p-2">Suppr</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
