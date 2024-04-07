

@extends('admin.base')

@section('title','La liste des option')

@section('content')

<div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.option.create')}}" class="btn btn-primary"> ajouter une <option value=""></option></a>
</div>
    
<table class="table table-striped">
        <thead>
        <tr>
                <th> nom</th>
                
                <th class="text-end">   Action</th>
            </tr>
        </thead>
        <tbody>

        
            @foreach($options as $option)
                <tr>
                
                        <td>{{$option -> nom}} </td>
                        <td> 
                                <div class="d-flex gap-2 w-100 justify-content-end">

                                        <a href="{{route('admin.option.edit', $option)}}" class="btn btn-primary"> editer</a>  
                                        <form action="{{route('admin.option.destroy', $option)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"> 
                                                        supprimer
                                                </button>
                                        </form>

                                </div>
                                
                       </td>
                </tr>
            @endforeach

        </tbody>


</table>

                       

@endsection
        

     

    

    
