<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | administration </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
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
        <a @class(["nav-link ", 'active' => str_contains($route,'bien.')])  href="/">  biens</a>
      </li>
    
    </ul>
  </div>
</nav>
    

             
                @yield('content')
                
            

<script src="{{asset('js/bootstrap.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.js')}}" ></script>

</body>
</html>