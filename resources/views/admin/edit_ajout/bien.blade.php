<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-list{
            display:flex;
            width:90%;
            margin:auto;
           
        }

        .list-enter{
            width:80%;
           
        }

        .image-enter{
            width: 20%px;
            height:250px;
            margin: auto;
            padding:0;
            
 ]}    
        
        input[type="file"]{
            display: inline-block;
            cursor: pointer;
            
            width: 200px;
            height: 140px;
            text-decoration:none;
        }

        .list-div{
            width:100%;
        }
        .div-1,.div-3,.div-4,.div-5{
            display : flex;
            width: 100%;
            padding:0;
        }
        .img{
            padding-top: 50px;
            padding: 5px;
            border: 1px solid blue;
        }
        .div-2{
            width: 100%;
            padding:0;
            
        }
        #description{
            width: 100%;
            box-sizing : border-box;
        }
        .input{
            width: 100%;
        
        }

        #option{
            width: 100%;
            height:30px;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-list">
                <div class="list-enter">
                   <div class="list-div">
                   <div class="div-1">
                        <div class="input">
                            <label for="titre">Titre</label><br>
                            <input type="text" value="{{ $biens->titre_b }}" name="titre_b" id="titre">
                        </div>
                        <div class="input">
                            <label for="surface">surface</label><br>
                            <input type="number" value="{{$biens->surface}}" name="surface" id="surface">
                        </div>
                        <div class="input">
                            <label for="prix">prix</label><br>
                            <input type="number" value="{{$biens->prix}}" name="prix" id="prix">
                        </div>
                    </div>
                    <div class="div-2">
                        <div class="input">
                            <label for="description">description</label><br>
                            <input type="text" value="{{$biens -> desc}}" name="desc" id="description">
                        </div>
                    </div>
                    <div class="div-3">
                        <div class="input">
                            <label for="piece">Pièce</label><br>
                            <input type="number" value="{{$biens -> nb_piece}}" name="nb_piece" id="piece">
                        </div>
                        <div class="input">
                            <label for="chambre">Chambre</label><br>
                            <input type="number" value="{{$biens -> nb_chambre}}" name="nb_chambre" id="chambre">
                        </div>
                        <div class="input">
                            <label for="etage">Etage</label><br>
                            <input type="number" value="{{$biens -> nb_etage}}" name="nb_etage" id="etage">
                        </div>
                    </div>
                    <div class="div-4">
                        <div class="input">
                            <label for="adresse">Adresse</label><br>
                            <input type="text" value="{{$biens->adresse}}" name="adresse" id="adresse">
                        </div>
                        <div class="input">
                            <label for="ville">Ville</label><br>
                            <input type="text" value="{{$biens -> ville}}" name="ville" id="ville">
                        </div>
                        <div class="input">
                            <label for="postal">Code postal</label><br>
                            <input type="number" value="{{$biens -> code_postal}}" name="code_postal" id="postal">
                        </div>
                    </div>
                    <div class="div-5">
                        <div class="input">
                            <label for="adresse">Options</label><br>
                            <select name="option_id" id="option" multiple>
                                @foreach($options as $option)
                                <option value="{{$option -> id}}">{{$option -> nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   </div>


                </div>
                <div class="image-enter">
                    @foreach($images as $image)
                        <div class="img">
                            <h3>selectionner des images</h1>
                            <img src="{{$image->nom_img}}" alt="image">
                        </div>
                    @endforeach
                </div>

        </div>
        <button type="submit">valider</button>
    </form>
    
</body>
</html>