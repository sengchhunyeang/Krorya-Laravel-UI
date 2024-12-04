<!doctype html>
<html lang="en">

<head>
    <title>Krorya</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="images/Logo.png" type="image/x-icon"/>
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="Css/custom.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="fixed w-1/6 bg-white shadow-md h-full p-4 ">
        <div class="mb-4 md:flex md:justify-center">
            <img src="images/Logo.png" alt="Logo" class="sm:w-1/2 md:w-1/2 lg:w-1/2 lg:mx-auto">
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
            <div class="flex justify-center lg:justify-start">
                <a href="{{ $item['href'] }}"
                   class="flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                    <!-- Icon -->
                    <img src="images/sidebar/{{ $item['icon'] }}" alt="{{ $item['label'] }}"
                         class="w-6 h-6 mr-2 block md:hidden lg:block">
                    <!-- Text -->
                    <span
                        class="hidden sm:hidden md:inline-block md:text-center lg:inline-block">{{ $item['label'] }}</span>
                </a>
            </div>
            @endforeach
        </nav>
    </div>

    <!-- Main Content -->
    <!-- Main Content -->
    <div class="ml-[16.6667%] flex-1 flex flex-col">
        <!-- Navbar -->
        <nav class="fixed top-0 left-[16.6667%] right-0 bg-white p-4 shadow z-10">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold text-[#AC1927]">ទំព័រដើម</div>
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
        <!-- Scrollable Content -->
        <div class="mt-16 overflow-y-auto p-4">
            <!-- Your sections and other content -->
            <section class="flex items-center justify-between  rounded-2xl m-6 p-6">
                <!-- Content continues... -->

            </section>
            <!-- Welcome, Section -->
            <section class="flex items-center justify-between bg-white  shadow-md rounded-2xl m-6 p-6">
                <!-- Text Section -->
                <div class="grid grid-rows-3">
                    <div>
                        <h1 class="krorya-welcome md:text-4xl font-bold text-slate-700 text-4xl">
                            ស្វាគមន៍មកកាន់ក្រយ៉ា
                        </h1>
                    </div>
                    <div>
                        <p class="text-xl md:text-md text-slate-800 ">
                            ម្ហូបខ្មែរ មានច្រើនសណ្ឋានដូចជា ស្ល ឆា ចៀន ស្ងោរ ជាដើម
                            <br/>
                            និងមានរសជាតិប្លែកៗពីគ្នា។
                        </p>
                    </div>
                    <div>
                        <Button href="/" class="px-4 py-2 btn rounded-md text-white krorya-color-primary-background mt-6">
                            ស្វែងរកមុខម្ហូប
                        </Button>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="w-full md:w-1/2">
                    <img src="images/welcome_image.png" alt="Food" class="rounded-2xl shadow-lg w-full object-cover">
                </div>
            </section>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4 m-5">
                <!-- Left Section -->
                <div class="col-span-2 space-y-6">
                    <!-- Categories Section -->
                    <div class="bg-white shadow rounded-2xl mt-4 p-6 ">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <img src="images/flower.svg" alt="flower" class="w-6 h-6 mr-2">
                                <div class="font-medium text-gray-700 moulpali-regular">បញ្ជីមុខម្ហូប</div>
                            </div>
                            <button class="flex items-center text-gray-600 hover:text-gray-800">
                                មើលទាំងអស់
                                <img src="images/skip.svg" alt="" class="w-4 h-4 ml-2">
                            </button>
                        </div>
                        <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                            <x-category-card image="images/category/all.svg" title="ទាំងអស់"></x-category-card>
                            <x-category-card image="images/category/breakfast.svg" title="ពេលព្រឹក"></x-category-card>
                            <x-category-card image="images/category/dessert.svg" title="បង្អែម"></x-category-card>
                            <x-category-card image="images/category/dinner.svg" title="ពេលល្ងាច"></x-category-card>
                            <x-category-card image="images/category/drink.svg" title="ភេជស្ជៈ"></x-category-card>
                            <x-category-card image="images/category/healthy.svg" title="សុខភាព"></x-category-card>
                        </div>
                    </div>

                    <!-- Popular Dishes Section -->
                    <div class="rounded-2xl bg-white shadow mt-4 p-6 ">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <img src="images/flower.svg" alt="flower" class="w-6 h-6 mr-2">
                                <div class="font-medium text-gray-700 moulpali-regular">ម្ហូបពេញនិយម</div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="md:grid lg:grid  grid-cols-1 items-center grid  gap-4 md:grid-cols-2  lg:grid-cols-3 lg:gap-4 ">
                                <!-- Recipe Card 1 -->
                                <x-card
                                    image="images/recipe/recipe.svg"
                                    altText="Descriptive text"
                                    foodName="ទឺកគ្រឿង"
                                    rate="4.5"
                                    price="១០០០០">
                                </x-card>
                                <x-card
                                    image="images/recipe/recipe.svg"
                                    altText="Descriptive text"
                                    foodName="ទឺកគ្រឿង"
                                    rate="4.5"
                                    price="១០០០០">
                                </x-card>
                                <x-card
                                    image="images/recipe/recipe.svg"
                                    altText="Descriptive text"
                                    foodName="ទឺកគ្រឿង"
                                    rate="4.5"
                                    price="១០០០០">
                                </x-card>

                                <!-- Add more recipe cards here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div>
                    <div class="w-full bg-white shadow mt-4 p-6 rounded-2xl md:px-8 sm:px-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <img src="images/flower.svg" alt="flower" class="w-6 h-6 mr-2">
                                <div class="font-medium text-gray-700 moulpali-regular">រូបមន្ដម្ហូប</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 p-3">
                            <x-recipeview recipeImage="images/recipe/recipe.svg" recipeName="ប្រហុកចំហុយ" duration="55 នាទី"
                                          level="ងាយស្រួល"></x-recipeview>
                            <x-recipeview recipeImage="images/recipe/recipe.svg" recipeName="សម្លឆា" duration="55 នាទី"
                                          level="ងាយស្រួល"></x-recipeview>
                            <x-recipeview recipeImage="images/recipe/recipe.svg" recipeName="សម្លាម្ជូរគ្រឿង"
                                          duration="55 នាទី" level="ងាយស្រួល"></x-recipeview>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</body>

</html>
