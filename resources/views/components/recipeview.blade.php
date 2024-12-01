<div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center bg-white rounded-lg ">
    <!-- Image Section -->
    <div class="col-span-1 flex justify-center items-center">
        <img src="images/recipe/recipe.svg" alt="recipe" class="w-24 h-24 rounded-lg">
    </div>

    <!-- Content Section -->
    <div class="col-span-2 grid gap-2">
        <!-- Title and Like Icon -->
        <div class="flex justify-between items-center">
            <div class="font-medium text-gray-800">{{$recipeName}}</div>
            <img src="images/unlike.svg" alt="like" class="w-6 h-6 text-yellow-500">
        </div>
        <!-- Duration Section -->
        <div class="flex items-center gap-2 text-gray-600">
            <img src="images/duration.svg" alt="duration" class="w-4 h-4">
            <div class="text-sm">{{$duration}} នាទី</div>
        </div>

        <!-- Difficulty Section -->
        <div class="w-20 h-6 bg-amber-100 rounded-md flex justify-center items-center">
            <div class="text-yellow-700 text-xs font-medium">{{$level}}</div>
        </div>
    </div>
</div>
