<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}"> <!-- Ton fichier CSS personnalisé -->
    <title>Page d'Accueil - E-Commerce</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">E-Commerce</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liste des gérants</a>
                    </li>
                </ul>
                <div class="buttons">
                    <a href="{{ route('manageur') }}" class="btn btn-primary">Ajouter un gérant</a>
                    <a href="{{ route('ProductVue') }}" class="btn btn-primary">Ajouter un produit</a>
                </div>
                <div class="auth-links">
                    <a href="{{ route('regist') }}">Sign In</a>
                    <a href="{{ route('logAdmin') }}">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card product-card">
                    <img src="{{ asset('storage/' . $product->photo) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text price">Prix: {{ $product->prix }}</p>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('modifier',$product->id) }}" class="btn btn-secondary">Modifier</a>
                            <form action="{{ route('acceuil',$product->id) }}" method="POST">
                               @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    <!-- ... Le reste de ton corps ... -->
</body>
</html>
