<!doctype html>
<html lang="en">

<head>
    <title>Krorya</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="images\Logo.png" type="image/x-icon" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="Css/custom.css">
    <style>
        .sidebar {
            background-color: #f8f9fa;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar .nav-link {
            font-weight: bold;
            color: #333;
            padding: 15px;
        }

        .sidebar .nav-link.active {
            color: #d9534f;
            background-color: #f1f1f1;
        }

        .sidebar .nav-link:hover {
            background-color: #e9ecef;
            color: #d9534f;
        }
        .spacing-between-elements h1,
        .spacing-between-elements div,
        .spacing-between-elements button {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <div class="text-center mb-4">
                    <img src="images/Logo.png" alt="Logo" style="width: 50%; height: auto;">
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#">
                        <img src="images/sidebar/home.svg" alt="home" class="p-1"> ទំព័រដើម
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/explor.svg" alt="home" class="p-1"> រុករកមុខម្ហូប
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/order.svg" alt="home" class="p-1"> ការកម្មង់ម្ហូប
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/add_card.svg" alt="home" class="p-1"> កន្រ្តកទំនិញម្ហូប
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/list_recipe.svg" alt="home" class="p-1"> បញ្ជីរាយគ្រឿងទេស
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/recipe.svg" alt="home" class="p-1"> រូបមន្តមុខម្ហូប
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/draft.svg" alt="home" class="p-1"> រក្សាទុកសេចក្តីព្រាង
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/favorite.svg" alt="home" class="p-1">ចំណង់ចំណូលចិត្ត
                    </a>
                    <a class="nav-link" href="#">
                        <img src="images/sidebar/setting.svg" alt="home" class="p-1"> ការកំណត់ផ្សេងៗ
                    </a>
                </nav>
            </div>

            <!-- Content Area -->
            <div class="col-md-10">
                <nav class="navbar bg-light">
                    <div class="container">
                        <div class="navbar-brand secondary">ការកម្មង់ម្ហូប</div>
                        <form class="d-flex" role="search">
                            <button class="btn">
                                <img src="images/nav/card.svg" alt="card.svg">
                            </button>
                            <button class="btn">
                                <img src="images/nav/notification.svg" alt="card.svg">
                            </button>
                            <button class="btn">
                                <img src="images/nav/user_default.svg" alt="card.svg">
                            </button>
                        </form>
                    </div>
                </nav>
                {{--  content Render here  --}}

                <div class="container-fluid row welcome-box  mt-4 ">
                    <div class="col-lg box-shadow rounded spacing-between-elements p-4">
                        <h1 class="fw-3 krorya-welcome fw-bold" style="color: ">
                            ស្វាគមន៍មកកាន់ក្រយ៉ា
                        </h1>
                        <div>
                            ម្ហូបខ្មែរ មានច្រើនសណ្ឋានដូចជា ស្ល ឆា ចៀន ស្ងោរ ជាដើម
                            និងមានរសជាតិប្លែកៗពីគ្នា។
                        </div>
                        <button class="btn krorya-color-primary-background btn-warning text-white">
                            ស្វែងរកមុខម្ហូប
                        </button>
                    </div>

                    <div class="col-lg">
                        <img class="shadow rounded" src="images/welcome_image.png" alt="welcome_image.png"
                            width="95%">
                    </div>
                </div>
                {{-- Card filter  --}}
                <div class="row container-fluid mt-4">
                    <div class="col-lg box-shadow rounded ">
                        <div class="row ">
                            <div class="p-2">
                                <div class="col-lg ">
                                    <div class="d-flex  align-items-center">
                                        <img src="images/flower.svg" alt="flower" class="mb-2">
                                        <div class="moulpali-regular">បញ្ជីមុខម្ហូប</div>
                                        <button class="btn ms-auto krorya-color-primary">
                                            មើលទាំងអស់
                                            <img src="images/skip.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg"></div>

                            </div>
                        </div>
                        <div class="col-lg">
                            b
                        </div>

                    </div>
                    <div class="col">
                        C
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
