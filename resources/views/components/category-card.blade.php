<div class="w-[94px] h-[90px] relative flex flex-col justify-end group carousel-item">
    <div
        class="w-full rounded-b-[20px] rounded-t-[7px] h-[60px] flex flex-col items-center justify-center transition-all duration-500 bg-white group-hover:krorya-color-primary-background">
        <div
            class="w-[54px] h-[54px] bg-white flex items-center justify-center rounded-2xl absolute top-0 left-0 right-0 mx-auto transform shadow-2xl ">
            <div class="relative w-[28px] h-[28px]">
                <div class="flex items-center justify-center">
                    <div class="w-full h-full">
                        <img src="{{ asset($image) }}" alt="Icon" class="object-contain w-full h-full"/>
                    </div>
                </div>
            </div>
        </div>
        <span
            class="text-black mt-4 text-[15px] transition-all duration-10 lg:duration-2 md:duration-10">
      {{$title}}
    </span>
    </div>
</div>

