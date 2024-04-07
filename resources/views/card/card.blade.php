<div class="card">
  <div class="card-body">
    <h5 class="card-title">
        <a href="{{route('detail',$bien)}}">{{$bien->titre_b}}</a>
    </h5>
    <p class="card-text">
        {{$bien->surface}}m² - {{$bien->ville}}  ({{$bien->code_postal}})
    </p>
    <div class="text-primary fw-bold" style="font-size : 1.4rem" >
        {{ number_format($bien->prix, thousands_separator : ' ') }}$
    </div>
  </div>
</div>