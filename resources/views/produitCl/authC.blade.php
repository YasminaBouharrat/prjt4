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
   
    <div class="container" style="background-color: black;border-radius:50px;width:750px;height:300px">
        <form  method="POST" action="{{route('client.login')}}" class="form-label m-5 p-6">
            @csrf
            <h1 style=" font-size: 25px;
            font-weight: bold;
            color: #d5ba0b; 
            font-family: Arial, sans-serif; 
          ">Authentification</h1>
          <label for="" class="form-label text-light">Email:</label>
          <input type="email" name="email" id="" class="form-control" value="{{old("email")}}">
          @error('email')
          <div class="text-danger"> {{$message}}</div>
          @enderror
          <label for="" class="form-label text-light">Password:</label>
          <input type="password" name="password" id="" class="form-control" value="{{old("password")}}">
           <div class="class d-grid text-center">
               <input type="submit" value="Se connecter" class="btn" style="background-color:  #d5ba0b;">
           </div>
          
       </form>
       <a href="{{route('client.register')}}" class="text-light">register</a>
    </div>
   


</body>
</html>