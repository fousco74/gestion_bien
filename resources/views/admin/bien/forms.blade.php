@extends('admin.base')

@section('title', $biens -> exists ? 'editer un bien ' : 'creer un bien ')

@section('content')

  <h1>@yield('title')</h1> 

  <form action="{{$biens -> exists ? route('admin.bien.update',$biens) : route('admin.bien.store',$biens)}}" method="post" class="mt-5">
    @csrf
    @method($biens -> exists ? 'put' : 'post')

    
       <div class="row">
            @include('shared.input',['class'=>'col','label' => 'titre', 'name' => 'titre_b', 'value' => $biens->titre_b])
            <div class="col row">
                    @include('shared.input',['class'=>'col','label' => 'surface', 'name' => 'surface', 'value' => $biens->surface])
                    @include('shared.input',['class'=>'col','label' => 'prix', 'name' => 'prix', 'value' => $biens->prix])
            </div>

       </div>
       @include('shared.input',['type'=> 'textarea','label' => 'description', 'name' => 'desc', 'value' => $biens->desc])
       <div class="row">
            @include('shared.input',['class'=>'col','label' => 'chambre', 'name' => 'nb_chambre', 'value' => $biens->nb_chambre])
            @include('shared.input',['class'=>'col','label' => 'Etage', 'name' => 'nb_etage', 'value' => $biens->nb_etage])
       </div>
       <div class="row">
            @include('shared.input',['class'=>'col','label' => 'adresse', 'name' => 'adresse', 'value' => $biens->adresse])
            @include('shared.input',['class'=>'col','label' => 'ville', 'name' => 'ville', 'value' => $biens->ville])
            @include('shared.input',['class'=>'col','label' => 'Code postal', 'name' => 'code_postal', 'value' => $biens->code_postal])   
       </div>
       @include('shared.select',['label' => 'options', 'name' => 'options', 'value' => $biens -> option()-> pluck('id'), 'multiple' => true])
       @include('shared.check',['label' => 'vendu', 'name' => 'sold', 'value' => $biens->sold])

       <button class="btn btn-primary">
            {{$biens -> exists ? 'Modifier' : 'Creer'}}
       </button>

        
  </form>

@endsection



