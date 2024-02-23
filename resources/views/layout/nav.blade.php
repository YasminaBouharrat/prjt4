<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    @auth
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">STORE YB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="display:flex">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="User Image" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                    </a>
                    <h6 style=" font-size: 18px;
                    font-weight: bold;
                    color: #333; 
                    font-family: Arial, sans-serif; 
                    margin: 10px;">{{auth()->user()->name}}</h6>
                </li>

                

                <li class="nav-item">
                    @if (auth()->guard('personnes')->check())
                        <a class=" btn btn-dark text-light" href="{{ route('personne.logout') }}">logout Admin</a>
                    @elseif (auth()->guard('clients')->check())
                        <a class=" btn btn-dark text-light" href="{{ route('client.logout') }}">logout</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    @endauth

    @guest
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.register') }}">Se connecter</a>
                </li>
            </ul>
        </div>
    </nav>
    @endguest

</body>
</html>
