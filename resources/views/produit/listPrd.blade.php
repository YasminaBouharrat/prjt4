@include('layout.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de traitement</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
<body>
    <style>
        body {
            
            background-image: url('{{ asset('transition2.jpg') }}');
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rgb(48, 47, 47);
            border-radius: 40px;
        }

        th, td {
            
            padding: 8px;
            text-align: center;
            color: white;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100px;
            height: 100px;
            border-radius: 20px;
        }

    </style>
<a href="{{ route('admin.create') }}" class="btn btn-dark btn-sm">Create</a>
<div class="class mt-5">
    <a href="{{route('produits.export')}}" class="btn btn-dark">Export Excel</a>
</div>


<div class="mt-5">
<form action="{{ route('produits.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="import_file" class="btn btn-dark">
    <button type="submit" class="btn btn-dark">Import Excel</button>
</form>
<table border="1" width="50%" rule="all" class="table">
        <h1 style=" font-size: 30px;
        font-weight: bold;
        color: rgb(48, 47, 47); 
        font-family: Arial, sans-serif;">Les Produits</h1>
        <tr>
            <th>ID</th>
            <th>Libelle</th>
            <th>Prix</th>
            <th>Image</th>
            <th>Details</th>
            <th>Supprimer</th>
            <th>Modifier</th>
           
        </tr>

        @foreach($produit as $value)
        <tr>
        <td>
                {{$value["id"]}}
            </td>
            <td>
                {{$value["libelle"]}}
            </td>
          

            <td>
                {{$value["prix"]}}
            </td>
           
            <td>
                <img class="card-img-top mx-auto" src="{{ asset('storage/' . $value['image']) }}" alt="Image title" style="width: 100px">

            </td>
            <td>
                <a  class="btn btn-light btn-sm float-end" href="{{route('admin.show',$value["id"])}}">details</a>
                
            </td>
           
            <td>
                <a href="{{route('admin.edit',$value["id"])}}" class="btn btn-light btn-sm float-end">modiffier</a>

            </td>
            <td>
                <form action="{{route("admin.destroy",$value["id"])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm float-end" >supprimer</button>
                </form>
            </td>
        </tr>
      
        @endforeach
       
    </table>
    {{$produit->links()}}
    
</div>
    
  
</body>
</html>
