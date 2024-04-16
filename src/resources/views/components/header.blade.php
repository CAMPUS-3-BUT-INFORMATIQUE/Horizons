@php
    $navs = [
        ["title" => 'FAQ', 'href' => 'index'],
        ["title" => 'Poursuite Et.', 'href' => 'index'],
        ["title" => 'Stages', 'href' => 'index'],
        ["title" => 'Apprentissage', 'href' => 'index'],
        ["title" => 'Relevé Décisions', 'href' => 'index'],
        ["title" => 'Chef Départ.', 'href' => 'index'],
        ["title" => 'Doc. Officiels', 'href' => 'index'],
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
          </ul>

          <a href="/">
            <img src="{{ asset('images/couleur.svg') }}" alt="logo" class='w-36' />
          </a>
        </div>
      </header>
</div>
