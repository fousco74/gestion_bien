@extends('base1')

@section('content')
<div class="bg-light p-5 mb-5 text-center">
    <form action="" method="get" class="contenair">
        <div class="d-flex gap-2">
        <input type="text" name="price" placeholder="le titre" value="{{$input['titre'] ?? ''}}" class="form-control">
            <input type="text" name="price" placeholder="le prix max" value="{{$input['price'] ?? ''}}" class="form-control">
            <input type="number" name="piece" placeholder="nombre de piece minimum" value="{{$input['piece'] ?? ''}}" class="form-control">
            <input type="text" name="surface" placeholder="surface maximum" value="{{$input['surface'] ?? ''}}" class="form-control"> 
            <input type="submit" value="valider" class="btn btn-primary">
        </div>
     
    </form>
</div>

<div class="contenair m-5">
    <div class="row">
        @foreach($biens as $bien)
            <div class="col-3 mb-4">
                 @include("card.card")
            </div>
        @endforeach
    </div>
</div>

@endsection