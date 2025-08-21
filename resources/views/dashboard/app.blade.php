<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>@yield('title', 'To do list')</title>
</head>

<body class="w-100 vh-100">

    <div class="row g-0 h-100">
        <nav id="sideBar" class="d-flex flex-column g-0 h-100 col-9 col-sm-5 col-md-5 col-lg-5 col-xl-3 px-4 py-5 bg-light">
            <div class=" d-block d-sm-none"> <!-- closing icon-->
                <i onclick="sideBar()" class="fa-solid fa-arrow-right float-end"></i>
            </div>
            <div class="d-flex flex-row container-fluid mt-5"> <!-- account container-->
                <img src="{{ asset('images/man.png') }}" alt="" class="avatar">
                <div class="d-flex flex-column w-100 px-4 overflow-hidden">
                    <h1 class="w-100 text-truncate fs-5 fw-semibold">asdaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>
                    <h3 class="w-100 text-truncate fs-6 fw-normal">mamawkaayo211@gmail.com</h3>
                </div>
            </div>

            <div class="flex-grow-1 d-flex flex-column gap-4 mt-5">
                <div>
                    <button class="btn btn-side-bar "><i class="fa-solid fa-bell"></i> Notification</button>
                </div>
                <div>
                    <button class="btn btn-side-bar"><i class="fa-solid fa-lightbulb"></i> To do</button>
                </div>
                <div>
                    <button class="btn btn-side-bar"><i class="fa-solid fa-square-check"></i> Done</button>
                </div>
            </div>
            <div>
                <button onclick="window.location='{{ route('getStarted') }}'" class="btn btn-logout"><i
                        class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </nav>
        <div class="col-3 col-sm-7 col-md-7 col-lg-7 col-xl-9">
            @yield('appContent')
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
