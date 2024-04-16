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
    <header class="text-black shadow-md bg-white min-h-[70px] min-w-full">
        <div class="flex items-center gap-5 relative w-full px-5">
            <a href="/">
                <img src="{{ asset('images/couleur.svg') }}" alt="logo" class="object-cover h-[70px] w-[118px]"/>
            </a>

            <div class="mx-auto max-1xl5:hidden">
                <ul class="flex w-full">
                    @foreach ($navs as $nav)
                        <li class="py-3 px-7 border-solid border-2 min-w-32 ">
                            <a href="{{ $nav['href'] }}"
                               class="hover:text-[#007bff] block font-semibold grid justify-items-center uppercase text-xs"
                            >
                                {{ $nav["title"] }}
                            </a>
                        </li>
                    @endforeach

                    {{-- admin --}}
                    @auth
                        <li class="py-3 px-7 border-solid border-2 min-w-32">
                            <a href="#"
                               class="hover:text-[#1c73a9] block font-semibold grid justify-items-center uppercase text-xs"
                            >
                                Admin
                            </a>
                        </li>
                    @endauth

                </ul>
            </div>

            <a href="/" class="">
                <img src="{{ asset('images/unicaen_logo_noir_transparent.svg') }}" alt="logo" class="h-[70px] w-[118px]"/>
            </a>

            <div class="ml-auto 1xl5:hidden">
                <button id="icon-mobile-menu" class="flex items-center p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                    <div id="mobile-menu-text" class="ml-2">MENU</div>
                </button>
            </div>
            <div id="mobile-menu" class="ml-auto hidden absolute bg-white min-w-fit w-1/4 right-0 top-16 1xl5:hidden">
                <ul class="w-full">
                    @foreach ($navs as $nav)
                        <li class="py-3 px-7 min-w-32 ">
                            <a href="{{ $nav['href'] }}"
                               class="hover:text-[#007bff] block font-semibold uppercase text-xs"
                            >
                                {{ $nav['title'] }}
                            </a>
                        </li>
                    @endforeach

                    {{-- admin --}}
                    @auth
                        <li class="py-3 px-7 min-w-32 ">
                            <a href="#"
                               class="hover:text-[#1c73a9] block font-semibold uppercase text-xs"
                            >
                                Admin
                            </a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </header>
</div>

<script>
    document.getElementById("icon-mobile-menu").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");

        const mobileMenuText = document.getElementById("mobile-menu-text");

        mobileMenuText.innerText = mobileMenuText.innerText === "MENU" ? "FERMER" : "MENU";
    });
</script>
