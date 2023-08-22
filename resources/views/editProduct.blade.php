<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
    <title>Document</title>
</head>
<body>


    <div class="glass-container" >
        <h1>Modifier le  produit </h1>
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <strong>Nom du produit</strong>
                <input type="text" name="name" value="{{ $product->name }}" placeholder="{{ $product->name }}">
            </div>

            <label for="category">Catégorie</label>
            <select name="categories_id" id="category" >
               @foreach ($categorie as $categorie)
               <option value="{{ $categorie->id }} ">{{ $categorie->name }}</option>
               @endforeach
            </select>

            <div class="form-group">
                <label for="prix">Nouveau Prix</label>
                <input type="number" id="email" name="prix" value="{{ $product->prix }}" >
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="photo" id="" value="{{  $product->photo}}" >
            </div>

            <div class="form-group">
                <label for="description">Description</label>
            <input type="text" name="description" id="" value="{{  $product->prix }}" >
            </div>

            <button type="submit"> Enrégistrer </button>

        </form>
    </div>





</body>
</html>
