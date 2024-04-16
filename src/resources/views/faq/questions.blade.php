
@php
    $sectionName = "FAQ - Étudiants";
    $color = 'horizon-blue';
@endphp

@extends('layout')

@section('title', 'FAQ')

@section('content')
    <div class="w-screen py-6 flex items-center justify-center relative">
        <div class="px-6 py-12 flex items-center justify-center w-full">
            <div class="bg-gray-200 rounded-full flex items-center justify-center space-x-6 text-gray-500 px-6 w-full max-w-xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                          clip-rule="evenodd" />
                </svg>
                <input type="text" class="py-4 bg-transparent focus:outline-none w-full"
                       placeholder="Rechercher une question">
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 pb-32">
            <div class="mx-auto max-w-5xl">
                <dl class="space-y-6">

                    <div class="question">
                        <dt class="bg-gray-200 px-6 py-3">
                            <button type="button"
                                    class="flex w-full items-center justify-between text-left text-gray-900"
                                    aria-controls="faq-0" aria-expanded="false">
                                <span class="text-lg font-medium leading-7">J’ai besoin de mon certificat de scolarité, où puis-je le trouver ?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-5 w-5 expanded-stroke" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="hidden h-5 w-5 collapsed-stroke" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="hidden pr-12 bg-gray-100 px-6 py-3" id="faq-0">
                            <p class="text-base leading-7 text-gray-600">https://catalogue-de-services.unicaen.fr/service/gestion-fiche/affiche/603?lang=fr</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <script>
        function load () {
            document.querySelectorAll('dt button').forEach(button => {
                button.addEventListener('click', () => {
                    const dd = button.parentElement.nextElementSibling;
                    const expanded = button.getAttribute('aria-expanded') === 'true' || false;

                    svg_expanded = button.querySelector('.expanded-stroke');
                    svg_collapsed = button.querySelector('.collapsed-stroke');

                    svg_expanded.classList.toggle('hidden');
                    svg_collapsed.classList.toggle('hidden');

                    button.setAttribute('aria-expanded', !expanded);
                    dd.classList.toggle('hidden');
                });
            });
        }

        window.addEventListener('load', load);
    </script>
@endsection
