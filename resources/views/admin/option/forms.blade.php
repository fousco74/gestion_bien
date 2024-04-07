@extends('admin.base')

@section('title', $options -> exists ? 'editer une option ' : 'creer une option ')

@section('content')

  <h1>@yield('title')</h1> 

  <form action="{{$options -> exists ? route('admin.option.update',$options) : route('admin.option.store',$options)}}" method="post" class="mt-5">
    @csrf
    @method($options -> exists ? 'put' : 'post')

       @include('shared.input',['label' => 'option', 'name' => 'nom', 'value' => $options->nom])

       <button class="btn btn-primary">
            {{$options -> exists ? 'Modifier' : 'Creer'}}
       </button>

        
  </form>

@endsection
