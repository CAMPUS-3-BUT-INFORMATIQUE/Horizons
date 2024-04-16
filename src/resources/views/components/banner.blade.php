<div class="banner relative">
    <div
        class="hidden from-horizon-blue bg-horizon-blue from-horizon-cyan bg-horizon-cyan from-horizon-yellow bg-horizon-yellow">
    </div>
    <img src="{{ asset('images/banniere.svg') }}" alt="Bannière Unicaen" class="w-full h-auto">
    <div class="absolute inset-0 w-1/2 bg-gradient-to-r from-horizon-{{ $color }} to-transparent"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <span
            class="px-4 py-2 bg-horizon-{{ $color }} bg-opacity-75 text-white text-3xl max-md:text-xl font-bold border-2 border-white">
            {{ $sectionName }}
        </span>
    </div>
</div>
