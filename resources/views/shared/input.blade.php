@php

$label ??= null;
$type ??= "text";
$class ??= null;
$name ??='';
$value ??= '';

@endphp

<div @class(["form-group", $class])>
    <label for="{{$name}}">{{$label}}</label>
     
     @if($type  == 'text' || $type =='email')

        <input class="form-control @error($name) is-invalid @enderror" type="{{$type}}" $id="{{$name}}" name="{{$name}}"  value="{{ old($name, $value)}}" >
    @else
            <textarea class="form-control @error($name) is-invalid @enderror" type="{{$type}}" $id="{{$name}}" name="{{$name}}"  >{{ old($name, $value)}} </textarea>
    @endif

     


    @error($name) 
      <div class="invalid-feedback">
          {{$message}}
      </div>
    @enderror

</div>