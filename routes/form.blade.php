<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
        <link href="/css/form.css" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Purple+Purse&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Purple+Purse&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Julius+Sans+One&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Purple+Purse&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body class="vh-100 overflow-scroll">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-12 custom-coloum-1">
                    <button class="btn " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/asset/menu.png" alt="Menu Icon">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
                        <li><a class="dropdown-item" href="{{ route('form') }}">Register</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    <img src="/asset/blendit.png" class="img-fitur" alt="face-id--v1"/>
                    <div class="rakkas-regular custom-1">New User Registration!</div>
                    <div class="judson-bold custom-2">Make Your Beauty Day</div>
                </div>
                <div class="col-lg-8 col-sm-12 custom-coloum-2">
                    <!-- Form -->
                        <div class="judson-bold custom-3">Sign UP</div>
                        <div class="entryarea">
                            <form id="registrasiForm" action="http://vps.danar.site:8080/register" method="POST"> class="justify-content-center">
                                @csrf
                                <div id="successAlert" class="alert alert-success " role="alert">
                                    <div class="judson-bold">Registration successful!</div>
                                <button type="button" class="btn btn-primary customclose" onclick="closeAlert()">Oke</button>
                                </div>
                                <div class="mb-3">
                                    <input type="email" id="email" name="email" class="jarak " required>
                                    <div class="labelline judson-bold">Email</div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" id="username" name="username" class="form-custom " required>
                                    <div class="labelline judson-bold">Username</div>
                                </div>
                                <div class="mb-3">
                                    <input type="password" id="password" name="password" class="form-custom" required>
                                    <div class="labelline judson-bold">Password</div>
                                    <div id="passwordHelpBlock" class="form-custom-2">
                                        Your password must be 8-20 characters long.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-light custom-button" id="RegisterApi">Register</button>
                            </form>
                           
                        </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/pesan.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </body>
</html>
