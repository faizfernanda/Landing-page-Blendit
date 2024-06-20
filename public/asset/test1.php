<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Purple+Purse&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Purple+Purse&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Julius+Sans+One&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Purple+Purse&display=swap" rel="stylesheet">
    </head>

    <body class="vh-100  overflow-scroll">
    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg custom-navbar">
        <div class="container-fluid .custom-container-fluid">
            <a class=" custom-judul text-light" href="#">Blendit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class=" custom-2 text-light " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle custom-2 text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fitur
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                            <li><a class="dropdown-item" href="#">Fitur 1</a></li>
                            <li><a class="dropdown-item" href="#">Fitur 2</a></li>
                            <li><a class="dropdown-item" href="#">Fitur 3</a></li>
                            <!-- tambahkan sub-menu sesuai kebutuhan -->
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="custom-2 text-light " href="#">SignUp</a>
                    </li>
                
                </ul>
       
            </div>
        </div>
    </nav>
    <!-- container  -->
    <div class="container-fluid custom-container-flui-body">
    <div class="card border-0">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body custom-card">
                    <div class="card-title ">
                        <div class="judson-bold custom-3">Make Your Beauty Day</div>
                    </div>
                    <div class="card-text julius-sans-one-regular custom-4">
                        Get The Best Beauty and<span class="highlight">Elegance</span>
                        <div class="grid-container">
                            <img src="/asset/android.png"class="img-left-1" alt="mainpage">
                            <img src="/asset/iphone.png"class="img-left-2" alt="mainpage">
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <img src="/asset/iphone.png"class="img-left-2" alt="mainpage">
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 custom-card">
                <img src="/asset/mainpage.png"class="img-right" alt="mainpage">
                
            </div>
        </div>
    </div>

   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
