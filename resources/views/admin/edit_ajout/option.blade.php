<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            @csrf  
            @method('patch')
            <input type="hidden" value="{{$options->id}}" name="id">
            <input type="text" name="nom" value="{{$options->nom}}" id="option">
            
            <button type="submit">Modifier</button>
        </form>
</body>
</html>

