<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Produits</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            background-image: "url('back.jpg')"
        }

        .container {
            margin-top: 50px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            transition: box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            height: 100%; 
        }

        .product-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            width: 200px; 
            height: 200px;
        }
        .product-details {
            padding: 15px;
        }

        .product-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .product-quantity {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .add-to-cart-btn {
            background-color: #6c6d6d;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-to-cart-btn:hover {
            background-color: #050505;
        }



        .categories{
    padding: 3rem 0;
}
.categories .item{
    width: 300px;
    height: 300px;
    position: relative;
    background-size: cover;
    background-image: url(puffer.webp);
    display: flex;
}

.categories .item h5{
    bottom: 20px;
    width: 100%;
    position: absolute;
    text-align: center;
    display: flex;
}
.categories .item h5 a{
    color: black;
    font-weight: bold;
    padding: 0.7rem 5rem;
    background-color: beige;
    text-transform: uppercase;
    text-decoration: none;
    display: flex;
    text-align: center;
}

.categories{
    display: flex;
    flex: auto;
    animation-name: sir;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    flex-direction: row;
    margin: 50px 10px;
    
}
@keyframes sir{
    0%{
        transform: translateX(0%);
    }
    100%{
        transform: translateX(0%);
    }
    0%{
        transform: translateX(-50%);
    }

}
.about .row{
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    padding: 2rem 0;
    padding-bottom: 3rem;
}
.about .row .vidio-container{
    flex: 1 1 40rem;
    position: relative;
}
.about .row .vidio-container video{
    width: 100%;
    border: 1.5rem solid white;
    border-radius: .5rem ;
    box-shadow: 0 .5rem 1rem  gray;
    height: 100%;
    object-fit: cover;

}
.about .row .vidio-container h3{
    position: absolute;
    top: 50%; transform: translateY(-50%);
    font-size: 3rem;
    background: white;
    width: 96%;
    padding: 1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;


}
.about .row .content{
    flex: 1 1 40rem;
}
.about .row .content h3{
    font-size: 3rem;
    color: black;

}
.about .row .content p{
    font-size: 1.5rem;
    color: gray;
    padding: .5rem 0;
    padding-top: 1rem;
    line-height: 1.5;
}
.about .row .content .btn:hover{
    background-color: green;
    color: black;
}


    </style>
</head>
@include('layout.nav') 

<body style="background-image: url('{{ asset('back.jpg') }}')">

    <div class="container">
        <h1 class="mt-5 mb-4 text-light">Our Products</h1>
        <form action="{{ route('produits.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="name...">
                <button type="submit" class="btn btn-dark">Search</button>
            </div>
        </form>
        <div class="row">
            @foreach ($products as $product)
            
                <div class="col-md-3 mb-4 ">
                    <div class="card product-card" style="background-color: black; border-radius: 30px;">
                        <div class="text-end"><span class="badge bg-light">-15%</span></div>
                        <div class="card-body m-1">
                            <img class="card-img-top product-image" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->libelle }}">
                        </div>
                        <div class="text-center">
                            <h5 class="text-capitalize my-1 text-light">{{ $product->libelle }}</h5>
                            <p class="fw-bold">Prix : {{ $product->prix }} €</p>
                            <p class="card-text product-quantity">Quantité : {{ $product->Quantité }}</p>
                            <div class="text-center">
                            <form action="{{route('produits.addtocart',['produit' => $product->id])}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-info text-white bg-dark">Add to cart</button>
                              </form>
                              </div>
                              
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
   
    <div class="d-flex">
        <div class="categories">
            @foreach($products as $product)
                <div class="item slide{{ $loop->index + 1 }} py-2 mx-3 text-center" style="background-image: url('{{ asset('storage/' . $product->image) }}');border-radius: 30px">
                    <h5 class="text-center">
                        <a href="#">-15%</a>
                    </h5>
                </div>
            @endforeach
        </div>
    </div>
    <br><br><br><br>



<div id="About" class="about">
    <h1 class="heading text-light"><span>About </span> Us</h1>
    <div class="row">
        <div class="vidio-container col-md-6 col-sm-12">
            <video src="vidio.mp4" loop autoplay muted></video>
            <h3>Best Clothes</h3>
        </div>
        <div class="content col-md-6 col-sm-12">
            <h3 class="text-light">Why Choose Us?</h3>
            <P class="text-light">epudiandae quidemmagni ipsum quibusdam illo sint, alias explicabo sapiente. Officiis exercitationem dolorum itaque?</P>
            <P class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore odio debitis nostrum nam unde. Sequi f sit itaque!</P>
        </div>
    </div>
</div>






    </div>
    </div>
</div>
</body>
</html>
@extends('layout.Footer');