@php
    $navs = [
        ["title" => 'FAQ', 'href' => '#'],
        ["title" => 'Poursuite Et.', 'href' => '#'],
        ["title" => 'Stages', 'href' => '#'],
        ["title" => 'Apprentissage', 'href' => '#'],
        ["title" => 'Relevé Décisions', 'href' => '#'],
        ["title" => 'Chef Départ.', 'href' => '#'],
        ["title" => 'Doc. Officiels', 'href' => '#'],
    ];
@endphp

<div>
    <header class='shadow-md bg-white font-[sans-serif] min-h-[70px] min-w-full'>
        <div class='flex items-center mx-auto gap-5 relative w-fit'>
          <a href="/">
            <img src="{{ asset('images/UNICAEN_LOGO_noir.svg') }}" alt="logo" class='w-36' />
          </a>

          <ul id="collapseMenu" class='lg:!flex max-lg:w-full'>
            @foreach ($navs as $nav)
                <li class='max-lg:border-b max-lg:bg-[#007bff] py-3 px-7 max-lg:rounded border-solid border-2 min-w-32 '>
                <a href="{{$nav['href']}}"
                    class='lg:hover:text-[#007bff] max-lg:text-white block font-semibold text-m grid justify-items-center'>{{$nav['title']}}</a>
                </li>
            @endforeach

            @auth('admin')
                <li class='max-lg:border-b max-lg:bg-[#007bff] py-3 px-7 max-lg:rounded border-solid border-2 min-w-32 '>
                <a href="#"
                    class='lg:hover:text-[#007bff] max-lg:text-white block font-semibold text-m grid justify-items-center'>Admin</a>
                </li>
            @endauth

          </ul>

          <a href="/">
            <img src="{{ asset('images/couleur.svg') }}" alt="logo" class='w-36' />
          </a>
        </div>
      </header>
</div>
