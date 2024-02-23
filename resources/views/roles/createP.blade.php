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
<body style="background-image: url({{asset('frmbg.jpg')}})">
  
    <h1 class="text-warning">Register Admin</h1>
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
    <div class="container" style="background-color: black;border-radius:30px;">
        <form  method="POST" action="{{route('personne.register')}}" class="form-label" enctype="multipart/form-data">
            @csrf
          <label for="" class="form-label text-light">Name:</label>
          <input type="text" name="name" id="" class="form-control bg-warning" placeholder="Name..">
          @error('name')
          <div class="text-danger"> {{$message}}</div>
             
          @enderror
          <label for="" class="form-label text-light">Email:</label>
          <input type="email" name="email" id="" class="form-control bg-warning" placeholder="Email.." value="{{old("email")}}">
          @error('email')
          <div class="text-danger"> {{$message}}</div>
       @enderror
          <label for="" class="form-label text-light">Password:</label>
          <input type="password" name="password" id="" class="form-control bg-warning" placeholder="Password.." value="{{old("password")}}">
          @error('password')
          <div class="text-danger"> {{$message}}</div>
       @enderror
       <label for="" class="form-label text-light">Confirmer password:</label>
          <input type="password" name="password_confirmation" id="" class="form-control bg-warning" placeholder="Confirmer password" value="{{old("password_confirmation")}}">
          @error('password_confirmation')
          <div class="text-danger"> {{$message}}</div>
       @enderror
          <label for="" class="form-label text-light">Bio</label>
          <textarea  name="bio" id="" class="form-control bg-warning" placeholder="your bio ..">{{old("bio")}}</textarea>
          @error('bio')
          <div class="text-danger"> {{$message}}</div>
       @enderror

       
       <label for="" class="form-label text-light">Image</label>
       <input type="file" name="image" id="" class="form-control bg-warning">
           <div class="class d-grid text-center">
               <input type="submit" value="Ajouter" class="btn btn-warning">
           </div>
          
       </form> 
    
    </div>      
    <a href="{{route('personne.login')}}" class="text-warning">login</a>                                               
  
  

</body>
</html>