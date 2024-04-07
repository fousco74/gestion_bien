@extends('admin.base')

@section('title','La liste des biens')

@section('content')

  @if($errors->any())
        <div class="alert alert-danger">
                <ul>
                        @foreach($errors->all() as $error)
                         <li>{{$error}} </li>        
                        @endforeach
                </ul>
        </div>
  @endif

<div class="d-flex justify-content-between align-items-center">
        <h1>LES BIENS</h1>
        <a href="{{ route('admin.bien.create')}}" class="btn btn-primary"> ajouter un Bien</a>
</div>
    
        <table class="table table-striped">
        <thead>
        <tr>
                <th> Tittre</th>
                <th> Surface</th>
                <th>  Prix</th>
                <th> Ville</th>
                <th class="text-end">   Action</th>
            </tr>
        </thead>
        <tbody>

        
            @foreach($biens as $bien)
                <tr>
                
                        <td>{{$bien -> titre_b}} </td>
                        <td>{{$bien -> surface}}m² </td>
                        <td>{{number_format($bien -> prix, thousands_separator: ' ')}} </td>
                        <td>{{$bien -> ville}} </td>
                        <td> 
                                <div class="d-flex gap-2 w-100 justify-content-end">

                                        <a href="{{route('admin.bien.edit', $bien)}}" class="btn btn-primary"> editer</a>  
                                        <form action="{{route('admin.bien.destroy', $bien)}}" method="post">
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

        {{ $biens ->links() }}


@endsection

    

    
