@extends("base1")

@section('content')

<div class="bg-light p-5 mb-5 text-center">
    <div class="container">
        <h1>Agence Lorem, ipsum.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nemo obcaecati quasi?</p>
    </div>
</div>
<div class="container">
    <h2>Nos Biens</h2>
    <div class="row">
        @foreach($biens as $bien)
            <div class="col">
                @include('card.card')
            </div>
        @endforeach
    </div>
</div>

@endsection