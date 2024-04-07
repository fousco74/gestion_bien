@php

$label ??= null;
$type ??= "text";
$class ??= null;
$name ??= '';
$value ??= '';

@endphp

<div @class(["form-group", $class])>
    <label for="{{$name}}">{{$label}}</label>

        <select  $id="{{$name}}" name="{{$name}}[]" multiple>
            @foreach($options as $id => $option)
                <option @selected($value -> contains($id) ) value="{{$id}}"> {{$option}} </option>
            @endforeach
        </select>

</div>