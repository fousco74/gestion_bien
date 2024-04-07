<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | administration </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
  <div class="container-fluid">

   @php
         $route = request()->route()->getName();
         
   @endphp
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('home')}}">agence</a>
      </li>
     <li class="nav-item">
        <a @class(["nav-link ", 'active' => str_contains($route,'bien.')])  href="{{route('admin.bien.index')}}">Gerer les biens</a>
      </li>
      <li class="nav-item">
        <a @class(["nav-link ", 'active' => str_contains($route,'option.')])  href="{{route('admin.option.index')}}">Gerer les options</a>
      </li>
    </ul>
  </div>
</nav>
    

             <div class="container mt-5">
                @if(session('success'))
                   <div class="alert alert-success">
                     {{session('success')}}
                   </div>
                @endif

                @yield('content')
                
            </div>

<script src="{{asset('js/bootstrap.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.js')}}" ></script>
<script> new TomSelect('select[multiple]',{plugins: {remove_button:{title: 'supprimer'}}}) </script>
</body>
</html>