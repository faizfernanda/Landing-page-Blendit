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
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Petrona:ital,wght@0,100..900;1,100..900&family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


    </head>

    <body class="">
    <!-- Navbar -->
    <div class="container-fluid-lg">
        <div class="dropdown navbar-custom">
            <button class="btn " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/asset/menu.png" alt="Menu Icon">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
                <li><a class="dropdown-item" href="{{ route('form') }}">Register</a></li>
            </ul>
        </div>    
    </div>

    
    <!-- container  -->
    
    <div class="container-fluid-lg">
        <div class="card border-0">
            <div class="row g-0">
                <div class="card custom-card">
                    <img src="/asset/Logo.png"class="img-1" alt="mainpage">
                    <div class="judson-bold custom-3">Make Your Beauty Day</div>
                    <div class="card-text julius-sans-one-regular custom-4">
                        Get The Best Beauty and <span class="highlight">Elegance</span>
                    </div>
                    <img src="/asset/app.png"class="img-2" alt="mainpage">
                
                </div>
            </div>
        </div>
    </div>
   <div class="container-fluid-lg">
        <div class="card border-0">
            <div class="card custom-card-2">
                
                <div class="quattrocento-regular custom-fitur-2">
                An innovative application designed to facial recognition based on face shape, skintone, undertone, and skin type for makeup recommendation using Convolutional Neural Network in mobile apps.
                </div>
                <div class="judson-bold custom-fitur-1">Amazing Features</div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="/asset/face-id.png" class ="img-fitur-face" alt="face-id--v1"/>
                        <div class="poppins-medium custom-fitur-3">
                            analysis face
                        </div>
                        <div class="quattrocento-regular custom-fitur-detail">
                        Users can take a photo with their phone's camera, which the 
                        app analyzes to determine face type, skintone, undertone, skin type
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="/asset/brush.png" class ="img-fitur" alt="cosmetic-brush"/>
                        <div class="poppins-medium custom-fitur-4">
                            Product Recomendation
                        </div>
                        <div class="quattrocento-regular custom-fitur-detail">
                        The app provides product 
                        recommendations tailored to the user's skin tone,undertone,skin type
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="/asset/video.png" class ="img-fitur" alt="cosmetic-brush"/>
                        <div class="poppins-medium custom-fitur-3">
                            Makeup Tutorial
                        </div>
                        <div class="quattrocento-regular custom-fitur-detail">
                        The app includes various makeup categories and tutorials to help users try different makeup styles.
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
     <div class="container-fluid-lg">
        <div class="card border-0">
            <div class="card-body custom-card-3">
               
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <img src="/asset/face.png" class ="img-face" alt="face-id--v1"/>
                    </div>
                    <div class="col-lg-8 col-md-8 ">
                        <div class="baloo-bhai-2-reguler custom-fitur-5">
                        Enjoy the makeup experience
                        </div>
                        <div class="poppins-light custom-5-detail">
                        Find the makeup that suits your needs. Get complete information about product benefits, compatibility, and how to use it.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card custom-card-4">
                            <div class="poppins-medium custom-fitur-6">
                                Face Type
                            </div>
                            <div class="poppins-extralight custom-6-detail">
                                Discover the best styles for your unique face type. Whether you have a round, oval, square, or heart-shaped face, our app offers personalized recommendations to enhance your natural beauty.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card custom-card-4">
                            <div class="poppins-medium custom-fitur-6">
                                Skin Tone
                            </div>
                            <div class="poppins-extralight custom-6-detail">
                            Identify your skintone to find the perfect foundation match. Our app caters to a wide range of skintones, ensuring you always look your best.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card custom-card-4">
                            <div class="poppins-medium custom-fitur-6">
                                Undertone
                            </div>
                            <div class="poppins-extralight custom-6-detail">
                            Unlock the secret to flawless makeup with undertone matching. Cool, warm, or neutral – our app guides you to the ideal shades for a radiant complexion.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card custom-card-4">
                            <div class="poppins-medium custom-fitur-6">
                                Skin Type
                            </div>
                            <div class="poppins-extralight custom-6-detail">
                            Achieve your best skin with tailored skincare tips for your skin type. Whether your skin is normal, oily, dry, combination, or sensitive, we have you covered.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid-lg">
        <div class="card border-0">
            <div class="card-body custom-card-5">
                <div class="petrona-reguler">How To Use Blendit ?</div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 custom-kolom-1">
                        <div class = "circle">
                            <div class ="noto-serif-jp">
                                1
                            </div>
                        </div>
                        <div class="pridi-extralight custom-fitur-3">
                             Create an Account
                        </div>
                        <div class="poppins-extralight custom-use-detail-2">
                            Enter your email address, create a password, and fill in the required information.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 custom-kolom-2">
                        <div class = "circle-2">
                            <div class ="noto-serif-jp">
                                2
                            </div>
                        </div>
                        <div class="pridi-extralight custom-fitur-3">
                            Uploading a Selfie
                        </div>
                        <div class="poppins-extralight custom-use-detail-2">
                            Ensure your face is well-lit and clear.
                            Remove any makeup before taking the photo.
                            Keep a neutral expression.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class = "circle">
                            <div class ="noto-serif-jp">
                                3
                            </div>
                        </div>
                        <div class="pridi-extralight custom-fitur-3">
                            make an election
                        </div>
                        <div class="poppins-extralight custom-use-detail-2">
                          
                            Select skintone, undertone, skin type from the options 
                            provided according to your skin condition
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 custom-kolom-2">
                        <div class = "circle-2">
                            <div class ="noto-serif-jp">
                                4
                            </div>
                        </div>
                        <div class="pridi-extralight custom-fitur-3">
                             Product Recomendation
                        </div>
                        <div class="poppins-extralight custom-use-detail-2">
                        Browse through 
                        the recommended products tailored 
                        to your skin tone, type, and 
                        preferences.
                        </div>
                    </div>
                </div>
        </div>
    </div>

<div id="demo" class="carousel slide" data-bs-ride="carousel">


<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/asset/team.jpg" alt="Los Angeles" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="/asset/akurasi.jpg" alt="Chicago" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="/asset/competitive.jpg" alt="New York" class="d-block w-100">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
