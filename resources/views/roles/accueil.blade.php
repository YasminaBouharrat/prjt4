<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background-image: url('back.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .back {
            height: 100vh;
            width: 100%;
            margin-left: 10px;
            animation: coloring 15s linear infinite;
            border-radius: 7px;
        }

        @keyframes coloring {
            0% {
                background-image: url('back.jpg');
            }
            25% {
                background-image: url('transition2.jpg');
            }
            50% {
                background-image: url('transition.jpg');
            }
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 70px;
        }

        .navbar-brand img {
            height: 70px;
            width: 70px;
            border-radius: 50%;
        }

        .main-menu {
            text-align: center;
            color: #fff;
            padding: 100px 20px;
        }

        .main-menu h1 {
            margin: 10px 0;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        @keyframes flash {
            0% {
                color: rgb(86, 155, 72);
                text-shadow: 0 0 7px rgb(86, 155, 72);
            }
            90% {
                color: white;
                text-shadow: none;
            }
            100% {
                color: rgb(86, 155, 72);
                text-shadow: 0 0 7px rgb(86, 155, 72);
            }
        }

        .flash-text {
            animation: flash 3s infinite;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand mx-5"><img src="nav1.jpg" alt="" class="rounded-pill"></a>
        <a class="navbar-brand" href="#">Espaces</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personne.register') }}">Admin Page</a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="{{route('produits')}}">Client Page</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-12 back">
        <div class="main-menu">
            <span class="flash-text">Online Shop</span>
            <h1 class="flash-text">Beautiful</h1>
            <h1 class="flash-text">Women</h1>
            <span>Free Pickup and Delivery Available</span>
            <div class="text-center"><button class="btn btn-success"> <a class="text-light" href="{{ route('produits') }}">Shop Now</a></button></div>
        </div>
    </div>
</body>
</html>
