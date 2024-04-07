<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')  </title>
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
        <a class="nav-link active" href="{{route('list_bien')}}">biens</a>
      </li>
     
    
    </ul>
  </div>
</nav>
    
@yield('content')
            

</body>
</html>