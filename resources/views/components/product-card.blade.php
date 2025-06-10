<div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
    <div class="p-4 flex-1 flex flex-col">
        <div class="bg-gray-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
            <img src="{{ $image }}" alt="{{ $name }}" class="w-12 h-12">
        </div>
        <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">
            {{ $category }}
        </div>
        <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">
            {{ $name }}
        </h3>
        <div class="mt-auto">
            @if($originalPrice)
                <div class="mb-1">
                    <span class="text-gray-400 text-xs price-original">Rp {{ number_format($originalPrice) }}</span>
                </div>
            @endif
            <div class="text-red-600 font-bold text-sm mb-3">Rp {{ number_format($price) }}</div>
            <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                Buy
            </button>
        </div>
    </div>
</div>
