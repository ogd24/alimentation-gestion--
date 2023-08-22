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


    <div class="glass-container">
        <h1>Ajouter un manager </h1>
        <form action="{{ route('manageur') }}" method="post">
@csrf
<div class="form-group">
    <label for="name">firstname</label>
    <input type="text" id="name" name="firstname"required>
</div>
<div class="form-group">
    <label for="name">lastname</label>
    <input type="text" id="name" name="lastname" required>
</div>
<div class="form-group">
    <label for="name">username</label>
    <input type="text" id="name" name="username" required>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
</div>
<div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>
</div>
<button type="submit">Valider</button>





        </form>
    </div>





</body>
</html>
