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
        .text-image-login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            background-color: rgba(155, 153, 153, 0.095);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="form-login container-fluid mt-4">
        <div class="row align-items-center">
            <div class="col"></div>
            <div class="col-md-8 d-flex justify-content-center">
                <div class="login-side shadow p-3 rounded-start"> <!-- Added shadow here -->
                    <div class="text-input d-flex flex-column p-4">
                        <h2 class="text-center secondary fs-1 moulpali-regular">
                            ក្រយាសូមស្វាគមន៍!
                        </h2>
                        <div class="d-flex justify-content-center p-2">
                            <img src="images/Group.png" alt="Group.png" width="50%">
                        </div>
                        <p class="fs-6 text-center p-2">សូមវាយបញ្ចូលអុីម៉ែលនិង ពាក្យសម្ងាត់ដើម្បីចូលគណនី</p>
                        <form class="p2 ">
                            <div class="form-group p-2">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="បញ្ចូលអ់ីមែល">
                            </div>
                            <div class="form-group p-2">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="បញ្ចូលពាក្យសម្ងាត់">
                            </div>
                            <button type="submit"
                                class="btn krorya-color-primary-background w-100 btn-warning mt-2 text-white">ចូលគណនី</button>
                            <div class="text-center p-2 secondary">ឬភ្ជាប់ជាមួយ</div>
                            <button type="submit"
                                class="btn background1 w-100 d-flex align-items-center justify-content-center">
                                <img src="images/Google_logo.png" alt="Google" class="me-2"
                                    style="width: 20px; height: 20px;">
                                ចូលគណនីតាមរយៈ​ Google
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div style="position: relative; width: 100%;">
                        <img src="images/rice.png" alt="rice" style="width: 100%; display: block;">
                        <div class="text-image-login">
                            ម្ហូបខ្មែរមានភាពសម្បូរបែបអស្ចារ្យ ដែលបង្ហាញពីប្រណីតភាពនៃ រសជាតិ ព្រមទាំងគំនិតច្នៃប្រឌិត ។
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>

        </div>

    </div>
</body>

</html>
