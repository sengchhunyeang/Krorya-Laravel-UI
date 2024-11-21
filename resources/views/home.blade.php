<!doctype html>
<html lang="en">

<head>
    <title>Krorya</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="images\Logo.png" type="image/x-icon"/>
    <!-- Bootstrap CSS v5.2.1 -->

    <link rel="stylesheet" href="Css/custom.css">
    @vite('resources/css/app.css')
</head>

<body>

<body class="bg-gray-100">
<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/6 bg-white shadow-md h-screen p-4">
        <div class="text-center mb-4">
            <img src="images/Logo.png" alt="Logo" class="w-1/2 mx-auto">
        </div>
        <nav class="flex flex-col space-y-2">
            @php
            $menuItems = [
            ['href' => '#', 'icon' => 'home.svg', 'label' => 'ទំព័រដើម'],
            ['href' => '#', 'icon' => 'explor.svg', 'label' => 'រុករកមុខម្ហូប'],
            ['href' => '#', 'icon' => 'order.svg', 'label' => 'ការកម្មង់ម្ហូប'],
            ['href' => '#', 'icon' => 'add_card.svg', 'label' => 'កន្រ្តកទំនិញម្ហូប'],
            ['href' => '#', 'icon' => 'list_recipe.svg', 'label' => 'បញ្ជីរាយគ្រឿងទេស'],
            ['href' => '#', 'icon' => 'recipe.svg', 'label' => 'រូបមន្តមុខម្ហូប'],
            ['href' => '#', 'icon' => 'draft.svg', 'label' => 'រក្សាទុកសេចក្តីព្រាង'],
            ['href' => '#', 'icon' => 'favorite.svg', 'label' => 'ចំណង់ចំណូលចិត្ត'],
            ['href' => '#', 'icon' => 'setting.svg', 'label' => 'ការកំណត់ផ្សេងៗ'],
            ];
            @endphp

            @foreach ($menuItems as $item)
            <a href="{{ $item['href'] }}" class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                <img src="images/sidebar/{{ $item['icon'] }}" alt="{{ $item['label'] }}" class="w-6 h-6 mr-2">
                {{ $item['label'] }}
            </a>
            @endforeach
        </nav>
    </div>

    <!-- Content Area -->
    <div class="flex-1">
        <!-- Navbar -->
        <nav class="bg-white shadow p-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold  text-[#AC1927] ">ការកម្មង់ម្ហូប</div>
                <div class="flex space-x-4">
                    <button class="p-2">
                        <img src="images/nav/card.svg" alt="card.svg" class="w-6 h-6">
                    </button>
                    <button class="p-2">
                        <img src="images/nav/notification.svg" alt="notification.svg" class="w-6 h-6">
                    </button>
                    <button class="p-2">
                        <img src="images/nav/user_default.svg" alt="user_default.svg" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </nav>

        <!-- Welcome Section -->
        <section class="flex h-full flex-col-reverse md:flex-row items-center md:h-52 rounded-2xl m-5 ">
            <div class="p-9 w-full md:w-1/2 h-55 bg-white flex flex-col gap-3 justify-center items-start rounded-t-md md:rounded-l-md md:rounded-t-none rounded-2xl">
                <h1 class="krorya-welcome md:text-4xl font-bold text-slate-700">
                    ស្វាគមន៍មកកាន់ក្រយ៉ា
                </h1>
                <p class="text-sm md:text-md text-slate-800">
                    ម្ហូបខ្មែរ មានច្រើនសណ្ឋានដូចជា ស្ល ឆា ចៀន ស្ងោរ ជាដើម
                    <br />
                    និងមានរសជាតិប្លែកៗពីគ្នា។
                </p>
                <Button href="/" class="px-4 py-2 btn rounded-md text-white krorya-color-primary-background">
                    ស្វែងរកមុខម្ហូប
                </Button>
            </div>
            <div class="w-full md:w-1/2 h-55 md:h-full ">
                <img src="images/welcome_image.png" alt="welcome_image.png" class="rounded shadow w-full">
            </div>
        </section>

        <!-- Card Filter Section -->
        <div class="grid grid-cols-2 gap-4 m-5">
            <div class="bg-white shadow mt-4 p-6 rounded">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <img src="images/flower.svg" alt="flower" class="w-6 h-6 mr-2">
                        <div class="font-medium text-gray-700">បញ្ជីមុខម្ហូប</div>
                    </div>
                    <button class="flex items-center text-gray-600 hover:text-gray-800">
                        មើលទាំងអស់
                        <img src="images/skip.svg" alt="" class="w-4 h-4 ml-2">
                    </button>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <x-category-card image="images/category/all.svg" title="ទាំងអស់"></x-category-card>
                    <x-category-card image="images/category/breakfast.svg" title="ពេលព្រឹក"></x-category-card>
                    <x-category-card image="images/category/dessert.svg" title="បង្អែម"></x-category-card>
                    <x-category-card image="images/category/dinner.svg" title="ពេលល្ងាច"></x-category-card>
                    <x-category-card image="images/category/drink.svg" title="ភេជស្ជៈ"></x-category-card>
                    <x-category-card image="images/category/healthy.svg" title="សុខភាព"></x-category-card>
                </div>
            </div>
            <div class="bg-white shadow mt-4 p-6 rounded">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <img src="images/flower.svg" alt="flower" class="w-6 h-6 mr-2">
                        <div class="font-medium text-gray-700">រូបមន្ដម្ហូប</div>
                    </div>
                </div>
                <div class="grid grid-cols-6 ">
                    <!-- Add your category cards here -->
                </div>
            </div>
        </div>


    </div>
</div>
</body>

</html>
