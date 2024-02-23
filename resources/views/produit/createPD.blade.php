@include('layout.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('{{ asset('transition2.jpg') }}')">

    <h1 class="text-center">ADD Product</h1>
    @if ($errors->any())
    <x-alert type="danger">
        <li>Errors:</li>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </x-alert>
    @endif    
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="bg-dark p-5 mt-2 rounded">
            <form method="POST" action="{{route('admin.store')}}" class="form-label" enctype="multipart/form-data">
                @csrf
                <label for="" class="form-label text-light">libelle:</label>
                <input type="text" name="libelle" id="" class="form-control">
                @error('libelle')
                <div class="text-danger"> {{$message}}</div>
                @enderror
                <label for="" class="form-label text-light">prix:</label>
                <input type="text" name="prix" id="" class="form-control" value="{{old("prix")}}">
                @error('prix')
                <div class="text-danger"> {{$message}}</div>
                @enderror
                <label for="" class="form-label text-light">Quantite:</label>
                <input type="text" name="Quantité" id="" class="form-control" value="{{old("Quantité")}}">
                @error('Quantité')
                <div class="text-danger"> {{$message}}</div>
                @enderror
                <label for="" class="form-label text-light">Image</label>
                <input type="file" name="image" id="" class="form-control">
                <div class="class d-grid mt-3 text-center">
                    <input type="submit" value="Ajouter" class="btn btn-primary btn-light">
                </div>
            </form> 
        </div>
    </div>                                                              {{-- for send file--}}
  
</body>
</html>
