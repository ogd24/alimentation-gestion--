<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/aficher.css') }}">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Liste des Produits</title>

</head>

<body>
    <header>
        <h1>Liste des Produits</h1>
    </header>
    <main>
        <div class="product-list">
            <!-- Exemple d'affichage de produits -->


        </div>

        <div class="image, position " >
            @foreach ($products as $product)
                <div class="card" style="width: 18rem; height:24rem" >
                    <img src="{{ asset('storage/' . $product->photo) }}"  alt="." class="store">
                    <div class="card-body" style="display: flex">
                        <h2>{{ $product->name }}</h2> <br>
                        <p>{{ $product->description }}</p> <br> <br>
                        <p>Prix: {{ $product->prix }}</p>

                    </div>
                    <div>
                        <div>
                            <form action="{{ route('supprimer',$product->id) }}" method="POST">
                                <a href="{{ route('modifier', $product->id) }}">
                                    Modifier </a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
    <div>
    </div>

    <footer>
        <p>&copy; 2023 Votre Entreprise</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
