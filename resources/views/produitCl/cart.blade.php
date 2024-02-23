<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
 
</head>


<body style="background-image: url('{{ asset('transition2.jpg') }}')">
        <nav class="navbar bg-light px-5 py-3  mb-5">
        <a class="navbar-brand text-dark" href="/produits"  style=" font-size: 18px;
        font-weight: bold;
        color: #333; 
        font-family: Arial, sans-serif; 
        margin: 10px;">Back to Products</a>
    </nav>
    @if (!$produits)
        <div class="w-100 my-5">
            <h1 class="text-secondary mx-auto col-4">No products</h1>
        </div>
    @else
        <div class="container col-9 px-5 mt-4 d-flex justify-content-between">
            <h1 class="mx-5 text-light"  style=" font-size: 30px;
            font-weight: bold;
            color: #f1e6e6; 
            font-family: Arial, sans-serif; 
            margin: 10px;">My Cart</h1>
            <form action="{{route('produits.deleteallfromcart')}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="mt-3 btn text-light me-2" style="background-color:black
                
                ">Delete All</button>
            </form>
        </div>
        <div class=" mt-4" >
            @foreach ($produits as $produit)
                <div class="col-9 py-3 mb-5 d-flex mx-auto justify-content-between border" style="background-color: black;border-radius:40px">
                    <div class="d-flex" >
                      
                        <div class="border" style="border-radius:40px;border-color:rgb(244, 244, 244)0, 0, 0)">
                            <h3 class="text-light mx-5">{{ $produit['libelle'] }}</h3>
                            <div class=" mx-5">
                                <h6 class="text-secondary ">{{ $produit['prix'] }}DH</h6>
                                <h6 class="text-secondary ms-2">Quantity:{{ $produit['quantity'] }} </h6><br>
                                <img class="card-img-top mx-auto" src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->libelle }}" style="width: 100px">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <form action="{{ route('produits.deletefromcart', ['id' => $produit->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="mt-3 btn btn-outline-danger me-2">Delete</button>
                        </form>

                        <form action="{{ route('produits.pdf', ['id' => $produit->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="mt-3 btn btn-outline-danger me-2">Télécharger Infos sur Le produit</button>
                        </form>
                        <form action="{{ route('produits.add', ['id' => $produit->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="mt-3 btn btn-outline-success me-2">Buy Product</button>
                        </form>
                    </div>
                 
                </div>
            @endforeach
        </div>
       
    @endif
</body>

</html>