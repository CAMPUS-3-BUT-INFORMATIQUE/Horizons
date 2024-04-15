@extends('base')

@include('admin.sidebar', [
    'menus' => [
        'FAQ' => [
            ['url' => '/admin/liste-question', 'name' => 'Liste question'],
            ['url' => '/admin/ajouter-question', 'name' => 'Ajouter une question'],
        ],
        'Utilisateurs' => [
            ['url' => '/admin/etudiants', 'name' => 'Étudiants'],
            ['url' => '/admin/enseignants', 'name' => 'Enseignants'],
            ['url' => '/admin/enseignants', 'name' => 'Administrateurs'],
        ],
    ]
])
