<div class="h-screen w-64 text-black flex flex-col bg-amber-400 p-3">
    <div>
        <img src="{{ asset('storage/logo_unicaen_bl.png') }}" alt="Logo Unicaen">
    </div>
    @foreach ($menus as $menu => $submenus)
        <div tabindex="{{ $loop->index }}" class="collapse collapse-arrow hover:bg-gray-200/20 my-3">
            <input type="radio" name="accordion" />
            <div class="collapse-title flex items-center font-bold text-xl">
                {{ $menu }}
            </div>
            @if ($submenus)
                <div class="collapse-content pl-6">
                    <ul class="space-y-2">
                        @foreach ($submenus as $submenu)
                            <li><a href="{{ $submenu['url'] }}">{{ $submenu['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    @endforeach
</div>
