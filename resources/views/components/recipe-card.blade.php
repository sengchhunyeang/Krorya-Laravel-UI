<div class="mb-3 max-w-sm p-3 bg-white rounded shadow">
    <div class="flex">
        <!-- Image Section -->
        <div class="w-1/3">
            <img src="{{ $recipeImage }}" class="rounded w-full h-full object-cover" alt="{{ $altText }}">
        </div>
        <!-- Content Section -->
        <div class="w-2/3 pl-4">
            <!-- Title and Like Button -->
            <div class="flex justify-between items-center">
                <div class="text-lg font-semibold">{{ $recipeName }}</div>
                <button class="p-1">
                    @if($liked)
                    <img src="images/like.svg" alt="like" class="w-6 h-6">
                    @else
                    <img src="images/unlike.svg" alt="unlike" class="w-6 h-6">
                    @endif
                </button>
            </div>

            <!-- Duration -->
            <div class="flex items-center mt-2">
                <img src="images/duration.svg" class="w-5 h-5" alt="duration">
                <p class="ml-2">{{ $duration }}</p>
            </div>

            <!-- Level Button -->
            <button class="mt-3 px-4 py-2 bg-yellow-500 text-white rounded">
                {{ $level }}
            </button>
        </div>
    </div>
</div>
