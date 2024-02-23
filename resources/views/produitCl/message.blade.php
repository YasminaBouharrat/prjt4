<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-color: #f0f0f0; 
        }
        .card {
            background-color: black; 
            color: white; 
            width: 50%; 
            margin: 0 auto; 
            padding: 20px; 
            text-align: center;
            border-radius: 10px; 
        }
        h1, p {
            color: white; 
        }
    </style>
</head>
<body>
<div class="card">
    <h1>Good! We've sent you the code of your order to your email.</h1>
    <p>Email: {{ auth()->user()->email }}</p>
</div>
</body>
</html>
