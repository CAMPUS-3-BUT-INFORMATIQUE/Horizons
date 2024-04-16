@php
    $navs = [
        ['title' => 'FAQ', 'href' => '#'],
        ['title' => 'Poursuite Et.', 'href' => '#'],
        ['title' => 'Stages', 'href' => '#'],
        ['title' => 'Apprentissage', 'href' => '#'],
        ['title' => 'Relevé Décisions', 'href' => '#'],
        ['title' => 'Chef Départ.', 'href' => '#'],
        ['title' => 'Doc. Officiels', 'href' => '#'],
    ];
@endphp

<div>
    <header class='shadow-md bg-white font-[sans-serif] min-h-[70px] min-w-full'>
        <div class='flex items-center gap-5 relative w-full lg:px-5'>
            <a href="/" class="min-w-36">
                <img src="{{ asset('images/UNICAEN_LOGO_noir.svg') }}" alt="logo" class='w-36' />
            </a>

            <div class="mx-auto">
                <ul class='lg:!flex max-lg:w-full'>
                    @foreach ($navs as $nav)
                        <li class='py-3 px-7 border-solid border-2 min-w-32 '>
                            <a href="{{ $nav['href'] }}"
                                class='hover:text-[#007bff]  block font-semibold text-m grid justify-items-center'>{{ $nav['title'] }}</a>
                        </li>
                    @endforeach

                    {{-- admin --}}
                    @auth
                        <li class='py-3 px-7 border-solid border-2 min-w-32 '>
                            <a href="#"
                                class='hover:text-[#1c73a9] block font-semibold text-m grid justify-items-center'>Admin</a>
                        </li>
                    @endauth

                </ul>
            </div>

            <a href="/" class="min-w-36">
                <img src="{{ asset('images/couleur.svg') }}" alt="logo" class='w-36' />
            </a>
        </div>
    </header>
</div>
