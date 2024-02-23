<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Accuei | @yield('title')</title>
</head>
<body>
    @include("layout.nav")
    <main>
        <div class="m-3">
            
            @if (session()->has('success'))
            <x-alert type="success">
                {{ session('success') }}
            </x-alert>
            @endif
           
            
            @yield('main')
        </div>
        
    </main>


    @include("layout.footer")
</body>
</html>