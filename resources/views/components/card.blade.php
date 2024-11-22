<div
    class="card shadow-md p-2 mx-0 rounded-2xl"
    style="width: 14rem; max-width: 14rem; min-width: 14rem;"
>
    <figure class="relative w-full h-40 ">
        <a href="#" class="block">
            <img
                src="{{$image}}"
                alt="Food Name"
                class="w-56 h-36 object-cover rounded-md"
            />

        </a>
        <div class="absolute top-2 right-2 flex space-x-2">
            <button class="bg-white p-1 rounded-full shadow-md hover:bg-gray-100">
                <!-- Placeholder for favorite icon -->
                <svg
                    width="16"
                    height="16"
                    viewBox="0 0 18 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M8.45135 2.57069L9 3.15934L9.54865 2.57068C11.3843 0.601168 13.2916 0.439002 14.6985 1.10313C16.1598 1.79292 17.25 3.44662 17.25 5.43913C17.25 7.47271 16.4446 9.03777 15.2916 10.3785C14.3397 11.4854 13.1884 12.4021 12.06 13.3006C11.7913 13.5145 11.524 13.7273 11.261 13.9414C10.7867 14.3275 10.3684 14.6623 9.96682 14.9047C9.56435 15.1475 9.25342 15.25 9 15.25C8.74657 15.25 8.43565 15.1475 8.03319 14.9047C7.63158 14.6623 7.21329 14.3275 6.73906 13.9414C6.47602 13.7273 6.20868 13.5144 5.94004 13.3006C4.81163 12.4021 3.66029 11.4854 2.7084 10.3785C1.5554 9.03777 0.75 7.47271 0.75 5.43913C0.75 3.44662 1.84018 1.79292 3.30146 1.10313C4.70838 0.439003 6.61569 0.601167 8.45135 2.57069Z"
                        fill="white"
                        stroke="black"
                        stroke-width="1.5"
                    />
                </svg>
            </button>
            <button class="bg-white p-1 rounded-full shadow-md hover:bg-gray-100">
                <!-- Placeholder for minus icon -->
                <svg
                    width="14"
                    height="2"
                    viewBox="0 0 14 2"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M13 1L1 1"
                        stroke="#AC1927"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />
                </svg>
            </button>
        </div>
    </figure>

    <div class="card-body p-2 bg-white md:col-span-1">
        <h2 class="card-title text-slate-700 text-lg">{{$foodName}}</h2>
        <p class="text-xs font-semibold flex items-center gap-1">
      <span>
        <!-- Placeholder for star icon -->
       <img
           src="images/rate.png"
           alt="Food Name"
       />
      </span>
            {{$rate}} <span class="font-medium">(100)</span>
        </p>
        <div class="card-actions flex flex-row items-center justify-end">
            <div
                class="badge bg-white border-none py-2 px-2 text-base krorya-color-primary "
            >
                {{$price}} រៀល
            </div>
        </div>
    </div>
</div>
