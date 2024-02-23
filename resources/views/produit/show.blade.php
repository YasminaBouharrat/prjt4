<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body style="background-image: url('{{ asset('transition2.jpg') }}');" class="container">
    <h1 class="text-light">Produit</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="card m-50 p-50 text-center bg-dark" style="border-radius: 70px;width:800px;">
                <img class="card-img-top mx-auto" src="{{ asset('storage/' . $produit['image']) }}" alt="Image title" style="width: 200px;>
                <div class="card body text-center">
                    <h4 class="card-title text-light">#{{$produit["id"]}} {{$produit["libelle"]}}</h4>
                    <p class="text text-light">{{$produit["created_at"]}}</p>
                    <p class="card-text text-light">{{$produit["prix"]}} DH</p>
                </div>  
            </div>

        </div>
      
               
            
        
    </div>
</body>
</html>
