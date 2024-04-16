
@extends('layout')

@php(
    $questions = [
        [
            '1' => [
                'question' => 'J’ai besoin de mon certificat de scolarité, où puis-je le trouver ?',
                'answer' => 'https://catalogue-de-services.unicaen.fr/service/gestion-fiche/affiche/603?lang=fr'
            ],
            '2' => [
                'question' => 'J’ai perdu “objet” où puis-je le retrouver ?',
                'answer' => 'https://www.iutcaen.unicaen.fr/dokuc3/objets_trouves ou demander à la secrétaire d’information communication'
            ],
            '3' => [
                'question' => 'Je ne vois pas mon emploi du temps, que dois-je faire ?',
                'answer' => 'Prévenir la secrétaire soit directement soit par mail (iut.ifs.informatique@unicaen.fr)'
            ],
            '4' => [
                'question' => 'Je viens de m’inscrire administrativement dans votre formation, je ne trouve pas comment faire mon inscription pédagogique ?',
                'answer' => 'L’inscription pédagogique se fait à la rentrée, Il faudra déposer au secrétariat, une attestation de responsabilité civile couvrant l’année universitaire.'
            ],
            '5' => [
                'question' => 'Je n’ai pas reçu ma Léocarte que dois-je faire ?',
                'answer' => 'https://sgc.unicaen.fr'
            ],
            '6' => [
                'question' => 'Ma Léocarte ne fonctionne pas, que dois-je faire ?',
                'answer' => 'Se connecter sur https://sgc.unicaen.fr et vérifier que la Léocarte est activée. Si Léocarte activée mais ne fonctionne pas, il faut contacter l’assistance: assistance-leocarte.etudiant@unicaen.fr'
            ],
            '7' => [
                'question' => 'Je souhaite démissionner de la formation, que dois-je faire ?',
                'answer' => '1- Prévenir son directeur des études
                             2- Faire une lettre de démission et la transmettre à son directeur des études'
            ],
        ]
    ]
)

@section('title', 'FAQ')

@section('content')
    <div class="w-screen py-6 flex flex-col items-center justify-center relative space-y-10 px-10">
        <div class="w-full grid md:grid-cols-2 gap-10">
            <div class="bg-gray-500/20 p-6 justify-center rounded-2xl flex flex-col items-center justify-center -z-1 h-64 w-full">
                <div class="relative h-full w-full">
                    <div class="flex flex-col items-center justify-center h-full w-full">
                        <div class="bg-white/20 px-6 py-4 flex flex-col items-center justify-center z-10 rounded-2xl backdrop-blur-md">
                            <h1 class="text-4xl font-bold">Premières questions</h1>
                        </div>
                    </div>
                    <img src="/images/banniere.svg" alt="IUT" class="object-cover w-full h-full rounded-2xl absolute top-0 left-0 z-1">
                </div>
            </div>
        </div>
    </div>
@endsection
