<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\resources\css\style.css">
    <style>
        table,tr,td{
           
            border-collapse: collapse;
        }

        table{
            position: relative;
            top : 60px;
            margin : auto;
        }
       
        td{
            width: 85%;
            padding: 5px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

        
    </style>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td><h1>Les options</h1></td>
            <td><a href="{{route('ajout_option')}}">ajouter une option</a></td>
        </tr>
        <tr>
             <td> <h3 class="nom">nom</h3></td>
             <td> <h3 class="action">  Action</h3></td>
        </tr>
        @foreach($option as $options)
        <tr>
           
                <td>{{$options -> nom}} </td>
                <td> <a href="{{route('edit_option',['id' =>$options -> id])}}">Editer</a>    <a href="{{route('delete_option',['id' =>$options -> id])}}">Supprimer</a></td>
        </tr>
        @endforeach
        
        
    </table>
</body>
</html>