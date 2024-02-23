@include('layout.nav');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="background-image: url('{{ asset('transition2.jpg') }}');" >
    <h1 class="text-center mt-5">Modifier Product</h1>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="bg-dark p-5 rounded">
            <form method="POST" action="{{ route('admin.update', $produit['id']) }}" class="form-label" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="" class="form-label">libelle:</label>
                <input type="text" name="libelle" id="" class="form-control" value="{{ old('libelle', $produit['libelle']) }}">
                @error('libelle')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label">prix:</label>
                <input type="text" name="prix" id="" class="form-control" value="{{ old('prix', $produit['prix']) }}">
                @error('prix')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label">Quantité:</label>
                <input type="text" name="Quantité" id="" class="form-control" value="{{ old('Quantité', $produit['Quantité']) }}">
                @error('Quantité')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label">Image</label>
                <input type="file" name="image" id="" class="form-control">
                <div class="d-grid mt-3 text-center">
                    <input type="submit" value="modifier" class="btn btn-light">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
