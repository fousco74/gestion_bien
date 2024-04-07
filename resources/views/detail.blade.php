@extends('base1')

@section('content')
 
  
<div class="container">
  {{$bien->titre_b}}
  {{$bien->nb_piece}}-{{$bien->surface}}m²
  {{number_format($bien->prix, thousands_separator : ' ') }}
<hr>
    <form action="" method="post">
        <h1>intéressé par ce bien ?</h1>
        <div class="row">
            @include('shared.input',['class'=>'col','type'=>'text','label' => 'Prénom', 'name' => 'prenom'])
            @include('shared.input',['class'=>'col','type'=>'text','label' => 'Nom', 'name' => 'nom'])
        </div>
        <div class="row">
            @include('shared.input',['class'=>'col','type'=>'text','label' => 'Telephone', 'name' => 'telephone'])
            @include('shared.input',['class'=>'col','type'=>'email','label' => 'Email', 'name' => 'email'])
        </div>
        @include('shared.input',['class'=>'col','type'=>'textarea','label' => 'Votre message', 'name' => 'message'])
        <div class="btn btn-primary">
            Nous contacter
        </div>
    </form>
</div>
   
<div class="container">
<div class="row">
    {{$bien->desc}}
    <div class="col-8">
        <h2>Caracteristique</h2>
        <table class="table table-stripe">
            <tr>
                <td>Surface habitable</td>
                <td>{{$bien->surface}}</td>
            </tr>
            <tr>
                <td>Pièce</td>
                <td>{{$bien->nb_piece}}</td>
            </tr>
            <tr>
                <td>Chambre</td>
                <td>{{$bien->nb_chambre}}</td>
            </tr>
            <tr>
                <td>Etage</td>
                <td>{{$bien->nb_etage}}</td>
            </tr>
            <tr>
                <td>Localisation</td>
                <td>{{$bien->adresse}} <br>{{$bien->ville}}({{$bien->code_postal}})</td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <h2>Spécificités</h2>
        @forelse($bien->option as $option)
            {{$option}}
        @empty
            aucune option
        @endforelse
    </div>
</div>
</div>

@endsection