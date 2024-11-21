<div class=" mb-3" style="max-width: 400px; padding: 10px;">
    <div class="row ">
        <div class="col-md-4">
            <img src="{{ $recipeImage }}" class="rounded" alt="{{ $altText }}" height="100%" width="100%">
        </div>
        <div class="col-md-8">

            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="card-title fs-5 ">{{ $recipeName }}</div>
                <button class="btn">
                    @if($liked)
                        <img src="images/like.svg" alt="like" style="width: 24px; height: 24px;">
                    @else
                        <img src="images/unlike.svg" alt="unlike" style="width: 24px; height: 24px;">
                    @endif
                </button>
            </div>
            
            <div class="duration d-flex flex-row">
                <img src="images/duration.svg" class="img-fluid rounded-top" alt="duration" />
                <p class="card-text p-2">{{ $duration }}</p>
            </div>
            <button class="btn btn-warning krorya-color-primary-background ">{{ $level }}</button>
        </div>
    </div>
</div>
