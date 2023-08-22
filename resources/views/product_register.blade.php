<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <h2>Enregistrement de Produits</h2>
        <form action="product_store" method="POST"  enctype="multipart/form-data">
            @csrf
            <label for="name">Nom du Produit</label>
            <input type="text" name="name" id="name" required>

            <label for="category">Catégorie</label>
            <select name="categories_id" id="category" required>
               @foreach ($categories as $categorie)
               <option value="{{ $categorie->id }} ">{{ $categorie->name }}</option>
               @endforeach
            </select>

            <label for="price">Prix</label>
            <input type="number" name="prix" id="prix" required>

            <label for="image">Image</label>
            <input type="file" name="photo" id=""  required>
            


            <label for="description">Description</label>
            <input type="text" name="description" id=""  required>

            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
