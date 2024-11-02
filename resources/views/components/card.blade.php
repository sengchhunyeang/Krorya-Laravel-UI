<div class="shadow p-2 mb-5 bg-body  rounded-3" style="width:12rem;">
    <img src="{{ $image }}" class="card-img-top rounded-3" alt="{{ $altText }}">
    <div class="card-body ">
        <p class="card-text fw-bold mt-1">{{ $content }}</p>
        <div class="d-flex flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-star-fill " viewBox="0 0 16 16" style="color: #FFD233">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <p class="card-text  mx-2"><span class="fw-bold">{{ $rate }}</span> <span> (90)</span></p>
        </div>
    </div>
    <p class="card-text d-flex justify-content-end krorya-color-primary fw-bold">{{ $price }} ៛ </p>
</div>
</div>
